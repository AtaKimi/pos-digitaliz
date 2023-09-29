<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // user with id from 1 - 3 is admin
        // user with id from 4 - 14 is tenant
        // user with id from 15 - 35 is waiters
        \App\Models\User::factory()->create(
            [
                'name' => fake()->name(),
                'email' => 'test@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12341234'), // password
                'remember_token' => Str::random(10),
                'phone_number' => fake()->numerify('+62 ####-####-####'),
            ],
        );

        \App\Models\User::factory(34)->create();

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
    }
}
