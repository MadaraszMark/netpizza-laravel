<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    // Tábla neve az adatbázisban
    protected $table = 'pizza';

    // Elsődleges kulcs
    protected $primaryKey = 'nev';
    public $incrementing = false;
    protected $keyType = 'string';

    // Tömegesen kitölthető mezők
    protected $fillable = [
        'nev',
        'kategorianev',
        'vegetarianus',
    ];

    /**
     * Kapcsolat a kategóriához (kategoria tábla)
     * Egy pizza egy kategóriába tartozik
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'kategorianev', 'nev');
    }

    /**
     * Kapcsolat a rendelésekhez (rendeles tábla)
     * Egy pizzát több rendelés is tartalmazhat
     */
    public function orders()
    {
        return $this->hasMany(Order::class, 'pizzanev', 'nev');
    }

    /**
     * Kényelmesebb elérés a vegetáriánus mezőhöz
     */
    public function getIsVegetarianAttribute(): bool
    {
        return (bool) $this->vegetarianus;
    }
}


