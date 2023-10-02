<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TenantServicePayment>
 */
class TenantServicePaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tenant_id' => fake()->numberBetween(1, 11),
            'user_id' => fake()->numberBetween(1, 3),
            'transfer_at' => fake()->date(),
            'total' => fake()->numberBetween(1, 20) * 10000,
        ];
    }
}
