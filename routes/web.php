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
Route::group(['prefix' => 'admin'], function () {
    Route::get('login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Backend\Auth\LoginController@login')->name('admin.login.post');
    Route::post('logout', 'Backend\Auth\LoginController@logout')->name('admin.logout');
    Route::get('/admin/dashboard', 'Backend\AdminController@index')->name('admin.dashboard');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
