<?php

namespace App\Providers;

use App\Observers\ProductImageObserver;
use App\ProductImage;
use Illuminate\Support\Facades\Blade;
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
        ProductImage::observe(ProductImageObserver::class);

        // Component Alias
        Blade::component('frontend.layouts.app', 'app-layout');
    }
}
