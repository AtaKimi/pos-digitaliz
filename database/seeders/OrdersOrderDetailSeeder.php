<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersOrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            'pending', 'cooking', 'serving', 'done', 'canceled'
        ];
        for ($i = 0; $i < 7; $i++) {
            $order = \App\Models\Order::factory()->state(
                [
                    'is_paid' => fake()->boolean(),
                    'status' => $statuses[fake()->numberBetween(0, 4)],
                ]
            )->create();

            for ($o = 0; $o < fake()->numberBetween(1, 7); $o++) {
                \App\Models\OrderDetail::factory()->for($order)->create();
            }

            $order->getPrice();
        }

    }
}
