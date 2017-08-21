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
    Route::get('dashboard', 'Backend\AdminController@index')->name('dashboard');
    Route::resource('countries', 'Backend\CountryController');
    Route::resource('cities', 'Backend\CityController');
    Route::resource('communes', 'Backend\CommuneController');
    Route::resource('currencies', 'Backend\CurrencyController');
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::resource('languages', 'Backend\LanguageController');
    });
    Route::prefix('promotions')->name('promotions.')->group(function () {
        Route::resource('ads', 'Backend\AdvertiseController');
    });
    Route::resource('home-sliders', 'Backend\HomeSliderController');
    Route::resource('partners', 'Backend\PartnerController');
    Route::prefix('catalogs')->name('catalogs.')->group(function () {
        Route::resource('categories', 'Backend\CategoryController');
        Route::resource('attributes', 'Backend\AttributeController');
        Route::resource('products', 'Backend\ProductController');
        Route::delete('products/images/{id}', 'Backend\ProductController@destroy_image')->name('delete.image');
        Route::get('products/duplicate/{id}', 'Backend\ProductController@duplicate')->name('products.duplicate');
        Route::get('products/import/form', 'Backend\ImportProductController@formImport')->name('products.formImport');
        Route::get('products/import/img', 'Backend\ImportProductController@formImg')->name('products.formImg');
        Route::post('products/import/form', 'Backend\ImportProductController@postImport')->name('products.postImport');
        Route::post('products/import/img', 'Backend\ImportProductController@importImg')->name('products.importImg');
        Route::get('products/get/product-upload-sample', 'Backend\ImportProductController@getSample')->name('products.get.sample');
        Route::get('products/get/product-upload-img', 'Backend\ImportProductController@getImageUploadSample')->name('products.get.upload-img');
        Route::get('products/search/item', 'Backend\ProductController@search')->name('products.search');
        Route::get('products/import/codeOutProduct', 'Backend\ImportProductController@codeOutProduct')->name('products.codeOutProduct');
    });
    Route::name('config.')->group(function () {
        Route::get('config-cache', 'ConfigController@cache_config')->name('cache');
        Route::get('config-clear', 'ConfigController@cache_config')->name('clear');
        Route::get('clear-cache', 'ConfigController@cache_clear')->name('clear');
        Route::get('view-clear', 'ConfigController@clear_view')->name('view_clear');
    });
    Route::prefix('sells')->name('sells.')->group(function () {
        Route::get('orders', 'Backend\Sell\OrderController@index')->name('orders.index');
        Route::get('orders/{id}/show', 'Backend\Sell\OrderController@show')->name('orders.show');
        Route::patch('orders/{id}', 'Backend\Sell\OrderController@orderStatus')->name('orders.status');
        Route::get('orders/show_invoice/{id}', 'Backend\Sell\OrderController@show_invoice')->name('orders.show_invoice');
        Route::get('orders/print_invoice/{id}', 'Backend\Sell\OrderController@print_invoice')->name('orders.print_invoice');
        Route::patch('customers/add-update-note/{id}', 'Backend\Sell\OrderController@addUpdatePrivateNote')->name('orders.add-update-note');
        Route::resource('customers', 'Backend\Sell\CustomerController');
    });
    //---------------Report controller----------------//
    Route::prefix('report')->name('report.')->group(function () {
        Route::get('sale','Backend\ReportController@index')->name('index');
        Route::get('show_detail/{date}', 'Backend\ReportController@show_detail')->name('show_detail');
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
    Route::get('search', 'HomeController@search_product')->name('search');
});

Auth::routes();

Route::prefix('customers')->name('customers.')->group(function () {
    //===========Customer Login and Register===========//
    Route::get('register', 'Customer\Auth\RegisterController@showRegisterForm')->name('register');
    Route::post('register', 'Customer\Auth\RegisterController@saveCustomerRegister')->name('register.account');
    Route::get('verify/{token}', 'Customer\Auth\RegisterController@verify')->name('verify.account');
    //------------Login and logout------------//
    Route::get('login', 'Customer\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Customer\Auth\LoginController@login')->name('login.post');
    Route::post('logout', 'Customer\Auth\LoginController@logout')->name('logout');
    //-----------Login with socialite---------//
    Route::get('redirect', 'Customer\Auth\SocialAuthController@redirect')->name('redirect');
    Route::get('callback', 'Customer\Auth\SocialAuthController@callback')->name('callback');
    //------------Customer frontend-----------//
    Route::resource('carts', 'Frontend\CartController');
    Route::get('dashboard', 'Customer\HomeController@index')->name('dashboard');
    Route::resource('carts', 'Frontend\CartController');
    Route::get('checkout', 'Customer\HomeController@checkout')->name('checkout');
    Route::post('checkout', 'Customer\HomeController@post_checkout')->name('post-checkout');
    //-----------------Customer Information----------------//
    Route::get('identity', 'Customer\HomeController@information')->name('identity');
    Route::patch('identity', 'Customer\HomeController@post_information')->name('identity.patch');
    Route::resource('addresses', 'Customer\AddressController');
    Route::get('order-history', 'Customer\OrderHistoryController@index')->name('order.history');
});

//-----------REST API CALL----------//
Route::prefix('api')->name('api.')->group(function () {
    Route::get('cities/{country}', 'REST\APIController@get_city')->name('cities');
    Route::get('communes/{city}', 'REST\APIController@get_commune')->name('communes');
    Route::patch('currency/set-default', 'REST\APIController@set_default')->name('currency.set_default');
});

Route::get('contact-us', 'Frontend\ContactController@index');
Route::get('about-us', 'Frontend\AboutController@index');
Route::get('invoice', 'Frontend\AboutController@invoice');
//-------------Partner Controller-------------//
Route::prefix('partners')->name('partners.')->group(function () {
    //===========Partner Login and Register===========//
    Route::get('register', 'Partner\Auth\RegisterController@showRegisterForm')->name('register');
    Route::post('register', 'Partner\Auth\RegisterController@saveCustomerRegister')->name('register.account');
    Route::get('verify/{token}', 'Partner\Auth\RegisterController@verify')->name('verify.account');
    //------------Login and logout------------//
    Route::get('login', 'Partner\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Partner\Auth\LoginController@login')->name('login.post');
    Route::post('logout', 'Partner\Auth\LoginController@logout')->name('logout');
    //------------Partner frontend-----------//
    Route::get('dashboard', 'Partner\HomeController@index')->name('dashboard');
    Route::prefix('catalogs')->name('catalogs.')->group(function () {
        Route::resource('products', 'Partner\ProductController');
        Route::delete('products/images/{id}', 'Backend\ProductController@destroy_image')->name('delete.image');
        Route::get('products/duplicate/{id}', 'Backend\ProductController@duplicate')->name('products.duplicate');
    });
});

//Route::resource('users', 'UsersController', [
//    'only' => ['index', 'show']
//]);
//
//Route::resource('monkeys', 'MonkeysController', [
//    'except' => ['edit', 'create']
//]);