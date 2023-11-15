<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        
        if(Storage::disk('media_qrcode')->exists('')){
            $directories = Storage::disk('media_qrcode')->allDirectories();
            for ($i=0; $i < count($directories); $i++) { 
                Storage::disk('media_qrcode')->deleteDirectory($directories[$i]);
            }
        }
        \App\Models\Desk::factory(100)->create();
    }
}
