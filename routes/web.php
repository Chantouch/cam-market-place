<?php

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
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', 'Backend\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Backend\Auth\LoginController@login')->name('login.post');
    Route::post('logout', 'Backend\Auth\LoginController@logout')->name('logout');
    Route::get('/dashboard', 'Backend\AdminController@index')->name('dashboard');
    Route::resource('countries', 'Backend\CountryController');
    Route::resource('cities', 'Backend\CityController');
    Route::resource('communes', 'Backend\CommuneController');
    Route::resource('currencies', 'Backend\CurrencyController');
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::resource('languages', 'Backend\LanguageController');
    });
    Route::resource('home-sliders', 'Backend\HomeSliderController');
    Route::prefix('catalogs')->name('catalogs.')->group(function () {
        Route::resource('categories', 'Backend\CategoryController');
        Route::resource('attributes', 'Backend\AttributeController');
        Route::resource('products', 'Backend\ProductController');
        Route::delete('products/images/{id}', 'Backend\ProductController@destroy_image')->name('delete.image');
    });
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
