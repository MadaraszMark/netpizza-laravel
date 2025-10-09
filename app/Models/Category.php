<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Az adatbázisban lévő tábla neve
     */
    protected $table = 'kategoria';

    /**
     * Elsődleges kulcs
     */
    protected $primaryKey = 'nev';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Tömegesen kitölthető mezők
     */
    protected $fillable = [
        'nev',
        'leiras',
    ];

    /**
     * Egy kategóriához több pizza is tartozhat
     */
    public function pizzas()
    {
        return $this->hasMany(Pizza::class, 'kategorianev', 'nev');
    }
}


