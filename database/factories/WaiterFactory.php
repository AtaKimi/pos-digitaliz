<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Waiter>
 */
class WaiterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //user_id for to became a waiter
            'user_id' => fake()->numberBetween(1, 10),
            //tenant_id to choice where does the waiter should belong
            'tenant_id' => fake()->numberBetween(1, 10),
        ];
    }
}
