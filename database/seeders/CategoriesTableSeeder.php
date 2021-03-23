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
            'image' => "https://baconmockup.com/640/360",
            'number_products' => 0
        ]);
        Category::create([
            'name' => 'Toys',
            'image' => "https://baconmockup.com/640/360",
            'number_products' => 1
        ]);
        Category::create([
            'name' => 'Games',
            'image' => "https://baconmockup.com/640/360",
            'number_products' => 2
        ]);
        Category::create([
            'name' => 'Clothes',
            'image' => "https://baconmockup.com/640/360",
            'number_products' => 3
        ]);
    }
}