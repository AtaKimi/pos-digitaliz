<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Desk>
 */
class DeskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'tenant_id' => fake()->numberBetween(1, 10),
            'tenant_id' => 1,
            'name' => "Table " . fake()->word() . fake()->numerify('-#####'),
            'qrcode' => fake()->url(),
        ];
    }
}
