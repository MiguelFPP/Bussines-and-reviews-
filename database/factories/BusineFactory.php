<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Busine>
 */
class BusineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'phone' => $this->faker->phoneNumber,
            'rating' => $this->faker->randomFloat(2, 0, 5),
            'image_url' => $this->faker->imageUrl,
        ];
    }
}
