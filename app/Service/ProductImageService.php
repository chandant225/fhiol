<?php

namespace App\Service;

use App\Product;
use App\ProductImage;
use Illuminate\Support\Facades\Storage;

class ProductImageService
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function create(Product $product, $image, $featured = false)
    {
        $productImage = new ProductImage([
            'path' => $this->imageService->storeImage($image),
            'thumbnail_path' => $this->imageService->storeImage($image),
            'medium_path' => $this->imageService->storeImage($image),
            'featured' => $featured
        ]);

        // $this->imageService->createThumbnail( Storage::path($productImage['thumbnail_path']), null, 350);
        $this->imageService->createThumbnail('storage/' . $productImage['medium_path'], null, 350);
        $this->imageService->createThumbnail('storage/' . $productImage['medium_path'], null, 600);

        $product->images()->save($productImage);

        return $productImage;
    }

    public function delete(Product $product)
    {
        foreach($product->images as $productImage) {
            $this->imageService->unlinkImage($productImage->path);
            $this->imageService->unlinkImage($productImage->thumbnail_path);
            $this->imageService->unlinkImage($productImage->medium_path);
            $productImage->delete();
        }
        
        return true;
    }
}
