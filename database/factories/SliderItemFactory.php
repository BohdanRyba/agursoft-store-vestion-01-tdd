<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SliderItem>
 */
class SliderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slider_id' => $this->faker->randomNumber(1),
            'title' => $this->faker->sentence(2),
            'subtitle' => $this->faker->sentence(4),
            'btn_text' => $this->faker->sentence(1),
            'btn_link' => '',
            'btn_color' => 'btn-primary',
            'image' => $this->faker->randomElement([
                'img/bg-img/1.jpg',
                'img/bg-img/2.jpg',
                'img/bg-img/3.jpg',
            ]),
            'bg_image' => '',
            'btn_enabled' => $this->faker->randomElement([0,1]),
            'btn_link_external' => $this->faker->randomElement([0,1]),
        ];
    }
}
