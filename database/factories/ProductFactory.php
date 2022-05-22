<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->randomElement([1,2,3,4,5]),
            'name' => $name = $this->faker->sentence,
            'slug' => Str::slug($name, '-'),
            'short_description' => $this->faker->sentence,
            'properties' => '',
            'description' => $this->faker->text,
            'price' => $price = rand(100, 999999),
            'quantity' => rand(100, 999),
            'discount_percent' => 0,
            'discount_amount' => 0,
            'type_id' => null,
            'price_dollar' => $price/30,
            'price_euro' => $price/35,
            'old_price' => null,
        ];
    }
}
