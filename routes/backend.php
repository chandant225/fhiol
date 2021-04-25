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
});
