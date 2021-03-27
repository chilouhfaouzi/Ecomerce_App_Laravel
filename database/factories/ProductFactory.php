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
        $price =  $my_faker->numberBetween($min = 500, $max = 9000);
        $last_price = $price + round($price * 0.2);
        return [
            'title' =>  $my_faker->sentence(4),
            'description' =>  $my_faker->text(),
            'category_id' =>  $my_faker->randomElement($array =  $catsid),
            'image' => "https://loremflickr.com/640/360",
            'price' => $price,
            'last_price' =>  $last_price,
            'solds' => $my_faker->numberBetween($min = 0, $max = 15),
            'quantity' => $my_faker->numberBetween($min = 3, $max = 30),
            'best_offers' => $my_faker->randomElement($array = array('0', '1'))
        ];
    }
}