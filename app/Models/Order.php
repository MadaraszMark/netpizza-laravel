<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'rendeles';

    protected $primaryKey = 'az';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'pizzanev',
        'darab',
        'felvetel',
        'kiszallitas',
    ];

    public function pizza()
    {
        return $this->belongsTo(Pizza::class, 'pizzanev', 'nev');
    }

    protected $casts = [
        'felvetel' => 'datetime',
        'kiszallitas' => 'datetime',
    ];
}


