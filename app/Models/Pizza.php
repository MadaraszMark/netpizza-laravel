<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    protected $table = 'pizza';

    protected $primaryKey = 'nev';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nev',
        'kategorianev',
        'vegetarianus',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'kategorianev', 'nev');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'pizzanev', 'nev');
    }
    public function getIsVegetarianAttribute(): bool
    {
        return (bool) $this->vegetarianus;
    }
}


