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

        // user id 1 is super admin 
        \App\Models\User::factory()->create(
            [
                'name' => 'super admin',
                'email' => 'super-admin@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'), // password
                'remember_token' => Str::random(10),
                'phone_number' => fake()->numerify('+62 ####-####-####'),
            ],
        );

        //user id 2 is admin
        \App\Models\User::factory()->create(
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'), // password
                'remember_token' => Str::random(10),
                'phone_number' => fake()->numerify('+62 ####-####-####'),
            ],
        );


        // user id 3 is admin
        \App\Models\User::factory(1)->create();


        // user id 4 is tenant
        \App\Models\User::factory()->create(
            [
                'name' => 'tenant',
                'email' => 'tenant@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'), // password
                'remember_token' => Str::random(10),
                'phone_number' => fake()->numerify('+62 ####-####-####'),
            ],
        );

        // user id 5 - 14 is tenant
        \App\Models\User::factory(10)->create();

        // user id 15 is tenant
        \App\Models\User::factory()->create(
            [
                'name' => 'tenant',
                'email' => 'waiter@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('1234'), // password
                'remember_token' => Str::random(10),
                'phone_number' => fake()->numerify('+62 ####-####-####'),
            ],
        );

        // user id 16 - 35 is waiter
        \App\Models\User::factory(20)->create();


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
