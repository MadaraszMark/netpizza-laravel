<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['nev' => 'Klasszikus', 'ar' => 2990],
            ['nev' => 'Prémium', 'ar' => 3990],
            ['nev' => 'Extra', 'ar' => 4990],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}


