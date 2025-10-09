<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $orders = [
            ['pizzanev' => 'Olasz klasszikus', 'darab' => 2, 'felvetel' => Carbon::now(), 'kiszallitas' => Carbon::now()->addHour()],
            ['pizzanev' => 'Hawaii Pizza', 'darab' => 1, 'felvetel' => Carbon::now(), 'kiszallitas' => Carbon::now()->addHour()],
            ['pizzanev' => 'NetPizza Extra', 'darab' => 3, 'felvetel' => Carbon::now(), 'kiszallitas' => Carbon::now()->addHours(2)],
            ['pizzanev' => 'Vegán Special', 'darab' => 1, 'felvetel' => Carbon::now(), 'kiszallitas' => Carbon::now()->addMinutes(90)],
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}



