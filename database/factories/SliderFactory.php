<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $this->faker->locale('uk_UA');
        return [
            'title' => $this->faker->sentence(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @param $userId
     * @return static
     */
    public function belongsToUser($userId): static
    {
        return $this->state(function (array $attributes) use ($userId) {
            return [
                'user_id' => $userId,
            ];
        });
    }
}
