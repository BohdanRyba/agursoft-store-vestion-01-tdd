<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class ConcertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'subtitle' => $this->faker->sentence(5),
            'date' => $this->faker->dateTime,
            'ticket_price' => $this->faker->randomNumber(4),
            'venue' => $this->faker->sentence,
            'address' => $this->faker->streetAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->countryCode,
            'zip' => $this->faker->randomNumber(4),
            'additional_information' => $this->faker->sentence(10),
            'published_at' => Carbon::parse('-1 week')
        ];
    }

    /**
     * @return ConcertFactory
     */
    public function unpublished()
    {
        return $this->state(function (array $attributes) {
            return [
                'published_at' => null,
            ];
        });
    }

    /**
     * @return ConcertFactory
     */
    public function published()
    {
        return $this->state(function (array $attributes) {
            return [
                'published_at' => Carbon::parse('-1 week'),
            ];
        });
    }


}
