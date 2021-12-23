<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Service\ImageService;
use App\Service\ProductImageService;
use App\Alert\Facades\Alert;
use App\Download;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        // return $request;
        DB::beginTransaction();
        try {
            $maxOrder = Product::max('order');

            $product = Product::create($request->validated()+[
                'order' => $maxOrder + 1,
            ]);

            if ($request->hasFile('image')) {
                $this->productImageService->create($product, $request->file('image'), $featured = true);
            }

            if ($request->hasFile('brand_logo')) {
                $product->brand_logo = $this->imageService->storeImage($request->file('brand_logo'));
                $product->save();
            }

            if ($request->hasFile('banner_image')) {
                $product->banner_image = $this->imageService->storeImage($request->file('banner_image'));
                $product->save();
            }

            if ($request->has('downloads')) {
                foreach ($request->downloads as $download) {
                    $product->downloads()->save(new Download([
                        'title' => $download['title'],
                        'type' => null,
                        'path' => Storage::disk('public')->putFile('downloads', $download['file']),
                    ]));
                }
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
        // dd($product->images);
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
            if ($product->featuredImage) {
                $featuredImage = $product->featuredImage;
                $this->imageService->unlinkImage($featuredImage->path);
                $this->imageService->unlinkImage($featuredImage->thumbnail_path);
                $this->imageService->unlinkImage($featuredImage->medium_path);
                $product->featuredImage()->delete();
            }
            $this->productImageService->create($product, $request->file('image'), $featured = true);
        }

        if ($request->hasFile('brand_logo')) {
            $product->brand_logo = $this->imageService->swapImage($product->getOriginal('brand_logo'), $request->file('brand_logo'));
            $product->save();
        }

        if ($request->hasFile('banner_image')) {
            $product->banner_image = $this->imageService->swapImage($product->getOriginal('brand_logo'), $request->file('banner_image'));
            $product->save();
        }

        if ($request->has('downloads')) {
            foreach ($request->downloads as $download) {
                $product->downloads()->save(new Download([
                    'title' => $download['title'],
                    'type' => null,
                    'path' => Storage::disk('public')->putFile('downloads', $download['file']),
                ]));
            }
        }

        Alert::message('Product Updated')->send();

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
