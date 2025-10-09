<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pizza;

class PizzaSeeder extends Seeder
{
    public function run(): void
    {
        $pizzas = [
            // 🍅 KLASSZIKUS kategória
            ['nev' => 'Olasz klasszikus', 'kategorianev' => 'Klasszikus', 'vegetarianus' => true],
            ['nev' => 'Hawaii Pizza', 'kategorianev' => 'Klasszikus', 'vegetarianus' => false],
            ['nev' => 'Görög Pizza', 'kategorianev' => 'Klasszikus', 'vegetarianus' => true],
            ['nev' => 'Baconos ropogós', 'kategorianev' => 'Klasszikus', 'vegetarianus' => false],

            // 🧀 PRÉMIUM kategória
            ['nev' => 'Hawaii különlegesség', 'kategorianev' => 'Prémium', 'vegetarianus' => false],
            ['nev' => 'NetPizza Extra', 'kategorianev' => 'Prémium', 'vegetarianus' => false],
            ['nev' => 'Baconos Pizza', 'kategorianev' => 'Prémium', 'vegetarianus' => false],

            // 🌿 EXTRA kategória
            ['nev' => 'Sonka & Ananász', 'kategorianev' => 'Extra', 'vegetarianus' => false],
            ['nev' => 'Vegán Special', 'kategorianev' => 'Extra', 'vegetarianus' => true],
            ['nev' => 'Quattro Formaggi', 'kategorianev' => 'Extra', 'vegetarianus' => true],
        ];

        foreach ($pizzas as $pizza) {
            Pizza::create($pizza);
        }
    }
}

