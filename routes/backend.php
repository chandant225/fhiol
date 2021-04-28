<?php

use Illuminate\Support\Facades\Route;

Route::name('backend.')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('categories', 'CategoryController@index')->name('categories.index');

    Route::get('products', 'ProductController@index')->name('products.index');
    Route::get('products/create', 'ProductController@create')->name('products.create');
    Route::post('products', 'ProductController@store')->name('products.store');
    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
    Route::put('products/{product}', 'ProductController@update')->name('products.update');
    Route::delete('products/{product}/destroy', 'ProductController@destroy')->name('products.destroy');

    // pages
    Route::get('pages', 'PageController@index')->name('pages.index');
    Route::get('pages/create-or-edit', 'PageController@createOrEdit')->name('pages.create-or-edit');
    Route::delete('pages/{page}', 'PageController@destroy')->name('pages.destroy');
    Route::patch('pages/{page}/restore', 'PageController@restore')->name('pages.restore');
    Route::delete('pages/{page}/force-delete', 'PageController@forceDelete')->name('pages.force-delete');

    // image sliders
    Route::get('image-sliders', 'ImageSliderController@index')->name('image-sliders.index');
    Route::get('image-sliders/create', 'ImageSliderController@create')->name('image-sliders.create');
    Route::get('image-sliders/{imageSlider}/edit', 'ImageSliderController@edit')->name('image-sliders.edit');
    Route::delete('image-sliders/{imageSlider}', 'ImageSliderController@delete')->name('image-sliders.destroy');

    Route::get('contact-us', 'ContactUsController@index')->name('contact-us.index');
    Route::get('subscribers', 'SubscriberController@index')->name('subscribers.index');

    Route::group(['namespace' => 'Setting'], function () {
        Route::get('settings/general', 'GeneralSettingController@index')->name('settings.general.index');
        Route::post('settings/general', 'GeneralSettingController@store')->name('settings.general.store');

        Route::get('settings/page', 'PageSettingController@index')->name('settings.page.index');
        Route::post('settings/page', 'PageSettingController@store')->name('settings.page.store');
    });
});
