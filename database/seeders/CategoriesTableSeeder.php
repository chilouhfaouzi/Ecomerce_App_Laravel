<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Baby',
            'number_products' => 0
        ]);
        Category::create([
            'name' => 'Toys',
            'number_products' => 1
        ]);
        Category::create([
            'name' => 'Games',
            'number_products' => 2
        ]);
    }
}