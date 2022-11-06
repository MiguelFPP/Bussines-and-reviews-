<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user' => $this->faker->name,
            'description' => $this->faker->text,
            'rating' => $this->faker->numberBetween(1, 5),
            'busines_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
