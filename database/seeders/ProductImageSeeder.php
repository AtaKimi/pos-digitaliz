<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Storage::disk('media_product_image')->exists('')) {
            $directories = Storage::disk('media_product_image')->allDirectories();

            for ($i = 0; $i < count($directories); $i++) {
                Storage::disk('media_product_image')->deleteDirectory($directories[$i]);
            }
        }

        $product = Product::all();

        for ($i = 0; $i < count($product); $i++) {
            for ($o = 0; $o < fake()->numberBetween(1, 4); $o++) {
                $img_number = fake()->numberBetween(1, 100);
                $path = "assets/img/num_1-100/" . $img_number . ".png";
                $product[$i]->addMedia(public_path($path))->preservingOriginal()
                    ->toMediaCollection('default', 'media_product_image');
            }
        }
    }
}
