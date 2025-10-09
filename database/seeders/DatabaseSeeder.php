<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Hívjuk a saját seedereket
        $this->call([
            CategorySeeder::class,
            PizzaSeeder::class,
            OrderSeeder::class,
        ]);

        // Hozzunk létre 1 admin és 1 regisztrált user-t
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@netpizza.hu',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Registered User',
            'email' => 'user@netpizza.hu',
            'password' => bcrypt('user123'),
            'role' => 'registered',
        ]);
    }
}

