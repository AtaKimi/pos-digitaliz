<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tax;
use App\Models\OrderDetail;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Enums\ProductStatusEnum;
use App\Models\Product;
use Database\Seeders\DeskSeeder;
use Database\Factories\TaxFactory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                UserSeeder::class,
                CategorySeeder::class,
                DeskSeeder::class,
                ProductSeeder::class,
                UserPermissionSeeder::class,
                UserProfileImageSeeder::class,
                CartSeeder::class,
                OrdersOrderDetailSeeder::class,
                TenantProfileImageSeeder::class,
                ProductImageSeeder::class,
                TenantServicePaymentSeeder::class,
                TenantServicePaymentImageSeeder::class,
            ]
        );
    }
}
