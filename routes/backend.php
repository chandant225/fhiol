<?php

use Illuminate\Support\Facades\Route;

Route::name('backend.')->group(function () {
    Route::get('categories', 'CategoryController@index')->name('categories.index');
});
