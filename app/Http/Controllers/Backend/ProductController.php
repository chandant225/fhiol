<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\ProductImage;
use App\Service\ImageService;
use App\Service\ProductImageService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $imageService;
    private $productImageService;

    public function __construct(ImageService $imageService, ProductImageService $productImageService)
    {
        $this->imageService = $imageService;
        $this->productImageService = $productImageService;
    }

    public function index()
    {
        return view('product.index');
    }

    public function create()
    {
        return view('product.create-edit');
    }

    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());
        
        $this->productImageService->create($product, $request->file('image'), $featured = true);

        // $productImage = new ProductImage([
        //     'path' => $this->imageService->storeImage($request->file('image')),
        //     'featured' => true
        // ]);

        // $product->images()->save($productImage);

        return redirect()->route('backend.products.index');
    }

    public function edit(Product $product)
    {
        $product->load('featuredImage');

        return view('product.create-edit', compact([
            'product'
        ]));
    }
}
