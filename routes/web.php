<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@index')->name('home');

Auth::routes(['register' => false]);

// Make this route for customers if necessary
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('backend/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('backend.logs');

Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/{product}', 'ProductController@show')->name('products.show');

Route::get('blogs', 'PostController@index')->name('posts.index');
Route::get('blogs/{post}', 'PostController@show')->name('posts.show');

Route::get('catalogues', 'CatalogueController@index')->name('catalogues.index');

// Route::get('find-a-store', 'StoreController@index')->name('stores.index');

Route::get('contact-us', 'ContactUsController@index')->name('contact-us.index');

Route::get('page/{page}', 'PageController@show')->name('frontend.pages.show');
