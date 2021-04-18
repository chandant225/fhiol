<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\ProductImage;
use App\Service\ImageService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
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
        
        $productImage = new ProductImage([
            'path' => $this->imageService->storeImage($request->file('image')),
            'featured' => true
        ]);

        $product->images()->save($productImage);

        return redirect()->route('backend.products.index');
    }
}
