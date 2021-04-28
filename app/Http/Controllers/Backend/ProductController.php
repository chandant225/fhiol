<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Service\ImageService;
use App\Service\ProductImageService;
use App\Alert\Facades\Alert;
use Illuminate\Support\Facades\DB;

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
        DB::beginTransaction();
        try {
            $product = Product::create($request->validated());

            $this->productImageService->create($product, $request->file('image'), $featured = true);
            DB::commit();
        } catch (\Exception $ex) {
            info('Error while saving product, Ex: ' . $ex->getMessage());
            //throw $th;
            DB::rollBack();

            // also delete images
            Alert::success()->message('An error occured while saving product')->send();
        }

        return redirect()->route('backend.products.index');
    }

    public function edit(Product $product)
    {
        $product->load('featuredImage');

        return view('product.create-edit', compact([
            'product',
        ]));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated() + [
            'is_new' => $request->has('is_new'),
            'featured' => $request->has('featured'),
        ]);

        $product->syncSpecifications($request->specifications);

        if ($product->wasChanged()) {
            Alert::message('Product Updated')->send();
        }

        return redirect()->back();
    }
}
