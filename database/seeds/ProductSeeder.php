<?php

use App\Product;
use App\ProductImage;
use App\Service\ImageService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $product = Product::firstOrCreate([
            'name' => 'Durable 2 Mixer',
        ], [
            'price' => 3000,
            'sale_price' => 2900,
            'description' => $this->getDescription(),
            'status' => true,
            'category_id' => \App\Category::where('name', 'like', 'Mixer%')->first()->id,
        ]);

        $this->associateImage($product);

        $product = Product::firstOrCreate([
            'name' => 'Eager 2.5l',
        ], [
            'price' => 1750,
            'sale_price' => 1590,
            'description' => $this->getDescription(),
            'status' => true,
            'category_id' => \App\Category::where('name', 'like', 'Mixer%')->first()->id,
        ]);

        $this->associateImage($product);

        $product = Product::firstOrCreate([
            'name' => 'Pickle Jar 3 With Stand ( Color Assorted)',
        ], [
            'price' => 500,
            'sale_price' => null,
            'description' => $this->getDescription(),
            'status' => true,
            'category_id' => \App\Category::where('name', 'like', 'Mixer%')->first()->id,
        ]);

        $this->associateImage($product);

        $product = Product::firstOrCreate([
            'name' => 'Rice Cooker 1.8 Ltrs Deluxe (KRC18700DL)',
        ], [
            'price' => 3025,
            'sale_price' => 2420,
            'description' => $this->getDescription(),
            'status' => true,
            'category_id' => \App\Category::where('name', 'like', 'Rice%')->first()->id,
        ]);

        $this->associateImage($product);

        // Copy the product image files
        File::copyDirectory(
            $this->getSeederPath() . 'seeded_images',
            Storage::disk('public')->path('/')
        );
    }

    private function getDescription()
    {
        $content = collect([
            "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam rem reiciendis natus temporibus saepe magnam aut perspiciatis cumque nulla velit, incidunt ipsa. Incidunt sit sint facere, cum officia quia recusandae?</p>",
            "<ul>
            <li>Design : Silver body color, Crystal Gloss Door, LED Display Panel</li>
            <li>Water Consumption : 48liters</li>
            <li>Power source : 230V/50Hz, Power Consumption : ( Min 150watt-450watt) ( Max : 2000watt-2400watt)</li>
            <li>Features: Eco bubble technology with bubble soak, Voltage Control(165V to 450V), Smart Check, Chile lock, delay End(3hours to 9hours), Diamond Drum, 1200RPM soeed motor, Transparent door</li>
            <li>Cycle: Super eco wash, 15min quick wash, cotton, e-cotton, Dark garment, baby care, Eco drum clean, Outdoor care, Option list, Rinse+spin, Synthetics, Wool</li>
            <li>Accessiories: Bolt Spanner, Assy water hose, USer manual, Hose hanger, Liquid Guide, Cap fixers</li>
            <li>5year warrenty on universal motor.&nbsp;</li>
        </ul>"
        ]);

        return $content->implode('');
    }

    public function associateImage(Product $product, $imageFile = null)
    {
        if ($product->wasRecentlyCreated) {
            ProductImage::insert([
                'path' => $imageFile ?? 'products/iron.jpg',
                'featured' => true,
                'product_id' => $product->id,
                'created_at' => now()
            ]);
        }
        return true;
    }

    protected function getSeederPath()
    {
        return database_path() . '/seeds/';
    }
}
