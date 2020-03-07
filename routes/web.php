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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('category','CategoryController@index');
Route::resource('brand', 'BrandController');

Route::resource('category', 'CategoryController');

Route::resource('product', 'ProductController');

Route::resource('dashboard', 'DashboardController');

Route::resource('rak', 'RakController');

Route::resource('supplier', 'SupplierController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
