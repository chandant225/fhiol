<?php

namespace App\Providers;

use App\Category;
use App\Observers\CategoryObserver;
use App\Observers\ProductImageObserver;
use App\ProductImage;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Force https
        if (env('APP_ENV') === 'production') {
            URL::forceSchema('https');
        }

        ProductImage::observe(ProductImageObserver::class);
        Category::observe(CategoryObserver::class);

        // Component Alias
        Blade::component('frontend.layouts.app', 'app-layout');
    }
}
