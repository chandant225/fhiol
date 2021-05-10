<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class ProductController extends Controller
{
    use SEOToolsTrait;

    public function index()
    {
        $filters = collect();
        $title = 'Products';
        $sortBy = request()->query('sort_by', 'recommended');
        $products = Product::with(['featuredImage'])->active();

        $products->when(request()->filled('category_id'), function ($query) use ($filters) {
            $category = Category::select('name')->where('id', request()->query('category_id'))->first();
            if ($category) {
                $filters->push('Category: ' . $category->name);
            }
            return $query->whereHas('category', function ($query) {
                return $query->whereId(request()->query('category_id'));
            });
        });

        // filter for minimun price
        if (request()->has('min_price') && !is_null(request()->get('min_price'))) {
            $filters->push('Minimun Price ' . priceUnit() . ' ' . request()->get('min_price'));
            $products = $products->where(function ($query) {
                return $query->addSelect(\DB::raw('COALESCE(`sale_price`, `price`)'));
            }, '>=', request()->get('min_price'));
        }

        // filter for maximun price
        if (request()->has('max_price') && !is_null(request()->get('max_price'))) {
            $filters->push('Maximum Price ' . priceUnit() . ' ' . request()->get('max_price'));
            $products = $products->where(function ($query) {
                return $query->addSelect(\DB::raw('COALESCE(`sale_price`, `price`)'));
            }, '<=', request()->get('max_price'));
        }

        if ($sortBy != 'recommended') {
            if ($sortBy == 'high-to-low') {
                $products = $products->orderByRaw('ifnull(sale_price, price) DESC');
            }
            if ($sortBy == 'low-to-high') {
                $products = $products->orderByRaw('ifnull(sale_price, price) ASC');
            }
        }

        $products = $products->latest()->paginate(request()->query('per_page') ?? 15);

        return view('frontend.product.index', [
            'title' => $title,
            'sortedBy' => ucfirst(str_replace('-', ' ', $sortBy)),
            'products' => $products,
            'filters' => $filters
        ]);
    }

    public function show(Product $product)
    {
        abort_unless($product->isActive(), 404);

        $this->seo()->setTitle($product->seoTitle());
        $this->seo()->setDescription($product->seoDescription());
        $this->seo()->opengraph()->addImage($product->seoImage());

        $product->increment('views');

        return view('frontend.product.show', [
            'siteTitle' => $product->name,
            'product' => $product,
            'specifications' => $product->specifications()
        ]);
    }
}
