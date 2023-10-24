<?php

namespace Database\Seeders;

use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersOrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $order = \App\Models\Order::factory()->state(
                [
                    'is_paid' => fake()->boolean(),
                    'status' => OrderStatus::fromValue(rand(OrderStatus::CANCELED, OrderStatus::DONE)),
                    'created_at' => fake()->dateTimeBetween('-3 years'),
                ]
            )->create();

            for ($o = 0; $o < fake()->numberBetween(1, 7); $o++) {
                \App\Models\OrderDetail::factory()->for($order)->create();
            }

            $order->getPrice();
        }

    }
}
