<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tenant>
 */
class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => Str::random(5)."TN".fake()->numerify('####'),
            'name' => fake()->company(),
            'address' => fake()->address(),
            'description' => fake()->paragraph(5),
            'user_id' => fake()->numberBetween(1, 10)
        ];
    }
}
