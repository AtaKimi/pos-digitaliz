<?php

namespace Database\Seeders;

use App\Models\TenantServicePayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantServicePaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TenantServicePayment::factory(20)->create();
    }
}
