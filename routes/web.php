<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomepageController@index')->name('home');

Auth::routes(['register' => false]);

// Make this route for customers if necessary
Route::get('/home', 'HomeController@index')->name('home');

Route::get('backend/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('backend.logs');

//about dropdown
Route::view('about/about-FH', 'frontend.pages.about.about-FH')->name('about.about-FH');
Route::view('about/intro', 'frontend.pages.about.intro')->name('about.intro');
Route::view('about/team', 'frontend.pages.about.team')->name('about.team');
Route::view('about/visionmisson', 'frontend.pages.about.visionmisson')->name('about.visionmisson');
Route::view('about/qa', 'frontend.pages.about.qa')->name('about.qa');
Route::view('about/certificate', 'frontend.pages.about.certificate')->name('about.certificate');

//our excellence
Route::view('latestmachine', 'frontend.excellence.latestmachine')->name('latestmachine');
Route::view('qualitycertificate', 'frontend.excellence.qualitycertificate')->name('qualitycertificate');
Route::view('iol', 'frontend.excellence.iol')->name('iol');
Route::view('country', 'frontend.excellence.country')->name('country');

//contact details
Route::view('distribution', 'frontend.distribution')->name('distribution');


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
