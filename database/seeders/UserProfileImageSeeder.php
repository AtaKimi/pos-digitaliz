<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class UserProfileImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        if(Storage::disk('media_payment_image')->exists('')){
            $directories = Storage::disk('media_payment_image')->allDirectories();
            for ($i=0; $i < count($directories); $i++) { 
                Storage::disk('media_payment_image')->deleteDirectory($directories[$i]);
            }
        }

        $users = User::all();

        for ($i = 0; $i < count($users); $i++) {
            $img_number = fake()->numberBetween(1, 100);
            $path = "assets/img/num_1-100/" . $img_number . ".png";
            $users[$i]->addMedia(public_path($path))->preservingOriginal()
            ->toMediaCollection('default', 'media_payment_image');
        }
    }
}
