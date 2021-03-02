<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title' => 'test',
            'description' => 'test2@gmail.com',
            'category_id' => 1,
            'image' => "yhfdfhd",
            'price' => 16212,
            'solds' => 12,
            'best_offers' => 1
        ]);
    }
}