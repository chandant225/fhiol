<?php

use Illuminate\Support\Facades\Route;

Route::name('backend.')->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    // Route::get('categories', 'CategoryController@index')->name('categories.index');
    Route::resource('categories', 'CategoryController');

    Route::get('products', 'ProductController@index')->name('products.index');
    Route::get('products/create', 'ProductController@create')->name('products.create');
    Route::post('products', 'ProductController@store')->name('products.store');
    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
    Route::put('products/{product}', 'ProductController@update')->name('products.update');
    Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy');
    Route::patch('products/{product}/restore', 'ProductController@restore')->name('products.restore');
    Route::delete('products/{product}/forceDelete', 'ProductController@forceDelete')->name('products.forceDelete');

    Route::get('post-categories', 'PostCategoryController@index')->name('post-categories.index');

    Route::get('posts', 'PostController@index')->name('posts.index');
    Route::get('posts/create', 'PostController@create')->name('posts.create');
    Route::post('posts', 'PostController@store')->name('posts.store');
    Route::get('posts/{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::put('posts/{post}', 'PostController@update')->name('posts.update');
    Route::delete('posts/{post}', 'PostController@destroy')->name('posts.destroy');
    Route::patch('posts/{post}/restore', 'PostController@restore')->name('posts.restore');
    Route::delete('posts/{post}/forceDelete', 'PostController@forceDelete')->name('posts.forceDelete');

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
    
    // Stores
    // Route::get('stores', 'StoreController@index')->name('stores.index');
    // Route::get('stores/create', 'StoreController@create')->name('stores.create');
    // Route::post('stores', 'StoreController@store')->name('stores.store');
    // Route::get('stores/{store}/edit', 'StoreController@edit')->name('stores.edit');
    // Route::put('stores/{store}', 'StoreController@update')->name('stores.update');
    // Route::delete('stores/{store}', 'StoreController@destroy')->name('stores.destroy');

    // Product Inquiries
    Route::get('inquiries', 'ProductInquiryController@index')->name('product-inquiry.index');
    Route::delete('inquiries/{productInquiry}', 'ProductInquiryController@destroy')->name('product-inquiry.destroy');
    Route::patch('inquiries/mark-read', 'ProductInquiryController@markRead')->name('product-inquiry.mark-read');

    // Distribution Inquiries
    Route::get('distribution-inquiries', 'DistributionInquiryController@index')->name('distribution-inquiry.index');
    Route::delete('distribution-inquiries/{distribution}', 'DistributionInquiryController@destroy')->name('distribution-inquiry.destroy');
    Route::patch('distribution-inquiries/mark-read', 'DistributionInquiryController@markRead')->name('distribution-inquiry.mark-read');

    // Catalogue
    Route::get('catalogues', 'CatalogueController@index')->name('catalogues.index');
    Route::get('catalogues/create', 'CatalogueController@create')->name('catalogues.create');
    Route::get('catalogues/{catalogue}/edit', 'CatalogueController@edit')->name('catalogues.edit');
    Route::delete('catalogues/{catalogue}', 'CatalogueController@destroy')->name('catalogues.destroy');

    // Videos
    Route::get('videos', 'VideoController@index')->name('videos.index');
    Route::get('videos/create', 'VideoController@create')->name('videos.create');
    Route::post('videos', 'VideoController@store')->name('videos.store');
    Route::get('videos/{video}/edit', 'VideoController@edit')->name('videos.edit'); 
    Route::put('videos/{video}', 'VideoController@update')->name('videos.update');
    Route::delete('videos/{video}', 'VideoController@destroy')->name('videos.destroy');

    // Testimonials
    Route::get('testimonials', 'TestimonialController@index')->name('testimonials.index');

    Route::get('our-team', 'OurTeamController@index')->name('our-team.index');
    Route::get('our-team/create', 'OurTeamController@create')->name('our-team.create');
    Route::post('our-team', 'OurTeamController@store')->name('our-team.store');
    Route::get('our-team/{ourTeam}/edit', 'OurTeamController@edit')->name('our-team.edit');
    Route::put('our-team/{ourTeam}', 'OurTeamController@update')->name('our-team.update');

    // Popup
    Route::get('popups', 'PopupController@index')->name('popups.index');
    Route::post('popups', 'PopupController@store')->name('popups.store');

    Route::group(['namespace' => 'Setting'], function () {
        Route::get('settings/general', 'GeneralSettingController@index')->name('settings.general.index');
        Route::post('settings/general', 'GeneralSettingController@store')->name('settings.general.store');

        Route::get('settings/page', 'PageSettingController@index')->name('settings.page.index');
        Route::post('settings/page', 'PageSettingController@store')->name('settings.page.store');

        Route::get('settings/homepage', 'HomepageSettingController@index')->name('settings.homepage.index');
        Route::post('settings/homepage', 'HomepageSettingController@store')->name('settings.homepage.store');

        Route::get('settings/footer', 'FooterSettingController@index')->name('settings.footer.index');
        Route::post('settings/footer', 'FooterSettingController@store')->name('settings.footer.store');

        Route::get('settings/code-injector', 'CodeInjectorSettingController@index')->name('settings.code-injector.index');
        Route::post('settings/code-injector', 'CodeInjectorSettingController@store')->name('settings.code-injector.store');
    });

    Route::get('change-password', 'ChangePasswordController@index')->name('change-password');

    Route::delete('downloads', 'DownloadController@destroy')->name('ajax.downloads.destroy');
});
