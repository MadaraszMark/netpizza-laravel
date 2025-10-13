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
        'user_id',
    ];

    public function pizza()
    {
        return $this->belongsTo(Pizza::class, 'pizzanev', 'nev');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected $casts = [
        'felvetel' => 'datetime',
        'kiszallitas' => 'datetime',
    ];
}



