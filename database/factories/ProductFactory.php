<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->word(),
            'price'        => $this->faker->numberBetween($min = 1500, $max = 6000),
            'stock'        => $this->faker->numberBetween($min = 0, $max = 500),
            'category_id'  => Category::factory(),
            'comment'      => $this->faker->word(),
            'img_path'     => null,

        ];
    }
}
