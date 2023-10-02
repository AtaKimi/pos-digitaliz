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
        for ($i = 0; $i < 1; $i++) {
            $order = \App\Models\Order::factory()->state(
                ['is_paid' => fake()->boolean()]
            )->create();

            for ($o = 0; $o < fake()->numberBetween(1, 7); $o++) {
                \App\Models\OrderDetail::factory()->for($order)->create();
            }

            $order->getPrice();
        }

    }
}
