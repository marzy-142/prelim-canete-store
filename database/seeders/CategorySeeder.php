<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics'],
            ['name' => 'Fashion'],
            ['name' => 'Home & Kitchen'],
            ['name' => 'Sports'],
            ['name' => 'Books'],
            ['name' => 'Toys'],
            ['name' => 'Beauty & Personal Care'],
            ['name' => 'Pet Supplies'],
            ['name' => 'Outdoor & Sports'],
            ['name' => 'Baby Products'],
            ];
            Category::insert($categories);
    }
}
