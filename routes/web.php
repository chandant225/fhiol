<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomepageController@index')->name('home');

Auth::routes();

// Make this route for customers if necessary
Route::get('/home', 'HomeController@index')->name('home');

Route::get('backend/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('backend.logs');

Route::get('categories', 'CategoryController@index')->name('categories.index');
Route::get('categories/{category}', 'CategoryController@show')->name('categories.show');

Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/{product}', 'ProductController@show')->name('products.show');

Route::get('blogs', 'PostController@index')->name('posts.index');
Route::get('blogs/{post}', 'PostController@show')->name('posts.show');

Route::get('catalogues', 'CatalogueController@index')->name('catalogues.index');

// Route::get('find-a-store', 'StoreController@index')->name('stores.index');

Route::get('contact-us', 'ContactUsController@index')->name('contact-us.index');

Route::get('page/{page}', 'PageController@show')->name('frontend.pages.show');
