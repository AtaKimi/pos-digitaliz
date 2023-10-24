<?php

namespace Database\Seeders;

use App\Models\TenantServicePayment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TenantServicePaymentImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Storage::disk('media_user_profile')->exists('')){
            $directories = Storage::disk('media_user_profile')->allDirectories();
            for ($i=0; $i < count($directories); $i++) { 
                Storage::disk('media_user_profile')->deleteDirectory($directories[$i]);
            }
        }

        $tenant_service_payments = TenantServicePayment::all();

        for ($i = 0; $i < count($tenant_service_payments); $i++) {
            $img_number = fake()->numberBetween(1, 100);
            $path = "assets/img/num_1-100/" . $img_number . ".png";
            $tenant_service_payments[$i]->addMedia(public_path($path))->preservingOriginal()
            ->toMediaCollection('default', 'media_user_profile');
        }
    }
}
