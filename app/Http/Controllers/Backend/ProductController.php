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

            // if ($request->has('specifications')) {
            //     $product->syncSpecifications($request->specifications);
            // }

            if ($request->hasFile('image')) {
                $this->productImageService->create($product, $request->file('image'), $featured = true);
            }
            
            DB::commit();
        } catch (\Exception $ex) {
            info('Error while saving product, Ex: ' . $ex->getMessage());
            //throw $th;
            DB::rollBack();

            // also delete images
            Alert::success()->message('An error occured while saving product')->send();
            return redirect()->back()->withInput();
        }

        Alert::success()->message('Product added successfully')->send();
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
        // return $request;
        $product->update($request->validated() + [
            'is_new' => $request->has('is_new'),
            'featured' => $request->has('featured'),
            'features' => $request->has('features') ? $request->features : null
        ]);

        if ($request->hasFile('image')) {
            if($product->featuredImage) {
                $featuredImage = $product->featuredImage;
                $this->imageService->unlinkImage($featuredImage->path);
                $this->imageService->unlinkImage($featuredImage->thumbnail_path);
                $this->imageService->unlinkImage($featuredImage->medium_path);
                $product->featuredImage()->delete();
            }
            $this->productImageService->create($product, $request->file('image'), $featured = true);
        }

        // $product->syncSpecifications($request->specifications);

        if ($product->wasChanged()) {
            Alert::message('Product Updated')->send();
        }

        return redirect()->back();
    }

    public function destroy(Product $product)
    {
        $product->delete();
        Alert::message('Product moved to trash')->send();
        return redirect()->route('backend.products.index');
    }

    public function restore($slug)
    {
        $product = Product::where('slug', $slug)->withTrashed()->firstOrFail();
        $product->restore();
        Alert::message('Product has been restored.')->send();
        return redirect()->back();
    }

    public function forceDelete($slug)
    {
        $product = Product::where('slug', $slug)->withTrashed()->firstOrFail();
        $this->productImageService->delete($product);
        $product->forceDelete();

        Alert::message('Product has been permanently deleted.')->send();
        return redirect()->back();
    }
}
