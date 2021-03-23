<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $my_faker = $this->faker;
        $catsid =  Category::where('id', '>', 0)->pluck('id');
        return [
            'title' =>  $my_faker->sentence(4),
            'description' =>  $my_faker->text(),
            'category_id' =>  $my_faker->randomElement($array =  $catsid),
            'image' => $my_faker->imageUrl($width = 640, $height = 480),
            'price' => $my_faker->randomNumber($nbDigits = 2, $strict = false),
            'solds' => $my_faker->numberBetween($min = 0, $max = 15),
            'best_offers' => $my_faker->randomElement($array = array('0', '1'))
        ];
    }
}