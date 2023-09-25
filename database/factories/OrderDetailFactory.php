<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderDetail>
 */
class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'modelable_id' => fake()->numerify('#########'),
            'modelable_type' => fake()->numerify('#########'),
            'metadata' => json_encode(['random' => 1]),
            'quantity' => fake()->numberBetween(1, 4),
        ];
    }
}
