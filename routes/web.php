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
        Route::get('products/duplicate/{id}', 'Backend\ProductController@duplicate')->name('products.duplicate');
    });
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('single_product', 'SingleController@index');

Route::prefix('products')->name('products.')->group(function () {
    Route::get('details/{slug}', 'Frontend\ProductController@show')->name('details');
    Route::get('category/{slug}', 'Frontend\ProductController@category')->name('category.slug');
    Route::resource('carts', 'Frontend\CartController');
    Route::delete('empty-cart', 'Frontend\CartController@emptyCart')->name('empty.carts');
    Route::post('switch-to-wish-list/{id}', 'Frontend\CartController@switchToWishlist')->name('switch.wishlist');
    Route::resource('wish-lists', 'Frontend\WishlistController');
    Route::delete('empty-wish-list', 'Frontend\WishlistController@emptyWishlist')->name('empty.wishlist');
    Route::post('switch-to-cart/{id}', 'Frontend\WishlistController@switchToCart')->name('switch.cart');
});

Auth::routes();

Route::prefix('customers')->name('customers.')->group(function () {
    Route::get('login', 'Customer\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Customer\Auth\LoginController@login')->name('login.post');
    Route::post('logout', 'Customer\Auth\LoginController@logout')->name('logout');
    Route::get('dashboard', 'Customer\HomeController@index')->name('dashboard');

    Route::resource('carts', 'Frontend\CartController');
});
