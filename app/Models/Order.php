<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * A kapcsolódó tábla neve
     */
    protected $table = 'rendeles';

    /**
     * Elsődleges kulcs beállítása
     */
    protected $primaryKey = 'az';
    public $incrementing = true;
    protected $keyType = 'int';

    /**
     * Tömegesen kitölthető mezők
     */
    protected $fillable = [
        'pizzanev',
        'darab',
        'felvetel',
        'kiszallitas',
    ];

    /**
     * A rendeléshez tartozó pizza
     */
    public function pizza()
    {
        return $this->belongsTo(Pizza::class, 'pizzanev', 'nev');
    }

    /**
     * Hasznos: formázott dátumok automatikusan
     */
    protected $casts = [
        'felvetel' => 'datetime',
        'kiszallitas' => 'datetime',
    ];
}


