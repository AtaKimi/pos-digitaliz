<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TenantProfileImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Storage::disk('media_tenant_profile')->exists('')){
            $directories = Storage::disk('media_tenant_profile')->allDirectories();

            for ($i=0; $i < count($directories); $i++) { 
                Storage::disk('media_tenant_profile')->deleteDirectory($directories[$i]);
            }
        }

        $tenant = Tenant::all();

        for ($i = 0; $i < count($tenant); $i++) {
            $img_number = fake()->numberBetween(1, 100);
            $path = "assets/img/num_1-100/" . $img_number . ".png";
            $tenant[$i]->addMedia(public_path($path))->preservingOriginal()
            ->toMediaCollection('default', 'media_tenant_profile');
        }
    }
}
