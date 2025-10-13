<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'kategoria';

    protected $primaryKey = 'nev';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nev',
        'leiras',
    ];

    public function pizzas()
    {
        return $this->hasMany(Pizza::class, 'kategorianev', 'nev');
    }
}


