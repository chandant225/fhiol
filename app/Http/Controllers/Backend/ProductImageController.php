<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductImageRequest;
use App\Product;
use App\ProductImage;
use App\Service\ImageService;
use App\Service\ProductImageService;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    private $imageService;
    private $productImageService;

    public function __construct(ImageService $imageService, ProductImageService $productImageService)
    {
        $this->imageService = $imageService;
        $this->productImageService = $productImageService;
    }

    public function index(Product $product)
    {
        $productImages = $product->images;
        $productImages = $productImages->map(function ($productImage) {
            $productImage['url'] = $productImage->imageUrl();
            return $productImage;
        });

        return response()->json($productImages);
    }

    public function store(ProductImageRequest $request)
    {
        $product = Product::findOrFail($request->product_id);
        // $productImage = new ProductImage([
        //     'path' => $this->imageService->storeImage($request->file('file')),
        //     'thumbnail_path' => $this->imageService->storeImage($request->file('file')),
        //     'medium_path' => $this->imageService->storeImage($request->file('file')),
        // ]);

        $this->productImageService->create($product, $request->file('file'));

        return response()->json([
            'success' => 'Image Saved'
        ]);
    }

    public function destroy(ProductImage $productImage)
    {
        try {
            $this->imageService->unlinkImage($productImage->path);
            $productImage->delete();

            return response()->json(null, 204);
        } catch (Exception $e) {
            return response()->json(null, 500);
        }
    }
}
