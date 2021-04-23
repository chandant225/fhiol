<?php

namespace App\Observers;

use App\ProductImage;
use Illuminate\Support\Facades\Storage;

class ProductImageObserver
{
    /**
     * Handle the product image "created" event.
     *
     * @param  \App\ProductImage  $productImage
     * @return void
     */
    public function created(ProductImage $productImage)
    {
        // generate thumbnail
        $imagePath = $productImage->path;
        Storage::copy($imagePath, ProductImage::$THUMBNAIL_DIR_NAME . '/' . $imagePath);
        Storage::copy($imagePath, ProductImage::$THUMBNAIL_DIR_NAME . '/' . $imagePath);
        // generate medium size image
    }

    /**
     * Handle the product image "updated" event.
     *
     * @param  \App\ProductImage  $productImage
     * @return void
     */
    public function updated(ProductImage $productImage)
    {
        //
    }

    /**
     * Handle the product image "deleted" event.
     *
     * @param  \App\ProductImage  $productImage
     * @return void
     */
    public function deleted(ProductImage $productImage)
    {
        //
    }

    /**
     * Handle the product image "restored" event.
     *
     * @param  \App\ProductImage  $productImage
     * @return void
     */
    public function restored(ProductImage $productImage)
    {
        //
    }

    /**
     * Handle the product image "force deleted" event.
     *
     * @param  \App\ProductImage  $productImage
     * @return void
     */
    public function forceDeleted(ProductImage $productImage)
    {
        //
    }
}
