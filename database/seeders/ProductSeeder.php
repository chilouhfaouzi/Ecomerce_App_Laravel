<?php

namespace Database\Seeders;

namespace Database\Factories;

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
        $my_faker = Faker\Factory::create();

        for ($i = 0; $i < 15; $i++) {
            Product::create([
                'title' =>  $my_faker->sentence(6),
                'description' =>  $my_faker->text(),
                'category_id' =>  $my_faker->randomElement($array = array('5', '6', '7', '8')),
                'image' => "https://loremflickr.com/640/360",
                'price' => $my_faker->randomNumber($nbDigits = 2, $strict = false),
                'solds' => $my_faker->numberBetween($min = 0, $max = 15),
                'best_offers' => $my_faker->randomElement($array = array('0', '1'))
            ]);
        }
    }
}