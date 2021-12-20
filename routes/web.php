<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomepageController@index')->name('home');

Auth::routes(['register' => false]);

Route::get('backend/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name('backend.logs');

//about dropdown
Route::view('about-fred', 'frontend.pages.about.about')->name('about-fred');
// Route::view('about-fred', 'frontend.pages.about.about-fred')->name('about-fred');
Route::view('about/ed-message', 'frontend.pages.about.ed-message')->name('about.ed-message');
Route::view('about/team', 'frontend.pages.about.team')->name('about.team');
Route::view('about/quality-certification', 'frontend.pages.about.quality-certification')->name('about.quality-certification');

//gallery
Route::view('gallery', 'frontend.pages.gallery.gallery')->name('gallery.index');
Route::get('gallery','GalleryController@index')->name('gallery.index');

//publication dropdown
Route::view('publication/news', 'frontend.pages.publication.news')->name('publication.news');
Route::view('publication/events', 'frontend.pages.publication.events')->name('publication.events');
Route::view('publication/article', 'frontend.pages.publication.article')->name('publication.article');
Route::get('publication/download', 'DownloadController@index')->name('publication.download');
Route::view('publication/publicationdetails', 'frontend.pages.publication.publicationdetails')->name('publication.publicationdetails');

//our excellence
Route::view('latestmachine', 'frontend.excellence.latestmachine')->name('latestmachine');
Route::view('qualitycertificate', 'frontend.excellence.qualitycertificate')->name('quality-certification');
Route::view('iol', 'frontend.excellence.iol')->name('iol');
Route::view('country', 'frontend.excellence.country')->name('country');

//contact details
Route::view('distribution', 'frontend.distribution')->name('distribution');
Route::post('distribution', 'DistributionController@store')->name('distribution.apply');

// Categories (Product)
Route::get('categories', 'CategoryController@index')->name('categories.index');
Route::get('categories/{category}', 'CategoryController@show')->name('categories.show');

Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/{product}', 'ProductController@show')->name('products.show');

Route::get('publications/{category?}', 'PostController@index')->name('posts.index');
Route::get('publication/{post}', 'PostController@show')->name('posts.show');

Route::get('catalogues', 'CatalogueController@index')->name('catalogues.index');

// Route::get('find-a-store', 'StoreController@index')->name('stores.index');

Route::get('contact-us', 'ContactUsController@index')->name('contact-us.index');

Route::get('page/{page}', 'PageController@show')->name('frontend.pages.show');
