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
        for ($i=0; $i < 20; $i++) { 
            $tenant_service_payment = TenantServicePayment::factory()->create();
        }
    }
}
