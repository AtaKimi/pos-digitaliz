<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tax;
use App\Models\OrderDetail;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Enums\ProductStatusEnum;
use Database\Factories\TaxFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // user with id from 1 - 3 is admin
        // user with id from 4 - 14 is tenant
        // user with id from 15 - 35 is waiters
        \App\Models\User::factory(35)->create();

        // user with id from 4 - 14 is tenant
        for ($i = 4; $i <= 14; $i++) {
            $tenant = \App\Models\Tenant::factory()->create([
                'code' => Str::random(5) . "TN" . fake()->numerify('####'),
                'name' => fake()->company(),
                'address' => fake()->address(),
                'description' => fake()->paragraph(5),
                'user_id' => $i,
                'is_tax' => fake()->boolean(),
            ]);
            $tenant->taxes()->save(\App\Models\Tax::factory()->create());
            $tenant->services()->save(\App\Models\Service::factory()->create());

        }

        // user with id from 15 - 35 is waiters, the tenant which is belong is random from 1 - 11 
        for ($i = 15; $i <= 35; $i++) {
            \App\Models\Waiter::factory()->create([
                //user_id for to became a waiter
                'user_id' => $i,
                //tenant_id to choice where does the waiter should belong
                'tenant_id' => fake()->numberBetween(1, 11),
            ]);
        }

        \App\Models\Category::factory(70)->create();

        \App\Models\Desk::factory(100)->create();

        \App\Models\Product::factory(100)->sequence(
            ['status' => 'in_stock'],
            ['status' => 'disabled'],
            ['status' => 'soldout'],
        )->create();

        for ($i = 1; $i <= 100; $i++) {
            \App\Models\Cart::factory()->state(['desk_id' => $i])->create();
        }

        for ($i = 0; $i < 1; $i++) {
            $order = \App\Models\Order::factory()->state(
                ['is_paid' => fake()->boolean()]
            )->create();

            for ($o = 0; $o < fake()->numberBetween(1, 7); $o++) {
                \App\Models\OrderDetail::factory()->for($order)->create();
            }

            $order->getPrice();
        }

        // for ($i = 1; $i <= 11; $i++) {
        //     \App\Models\Service::factory()->state(['tenant_id' => $i])->create();
        // }


        


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
