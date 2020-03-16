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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('category','CategoryController@index');

Auth::routes();
Route::get('logout','Auth\LoginController@logout')->name('logout');
Route::group(['middleware' => ['web','auth']], function () {
    Route::resource('informasi', 'InformasiTokoController');
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', function () {
        if(Auth::user()->level == 1){
            return view('admin.dashboard.mainAdmin');
        } elseif(Auth::user()-> level == 2){
            return view('admin.dashboard.mainUser');
        } else{
            echo 'Tidak ada akses';
        }
    });
});

//Hak Akses Admin
Route::group(['middleware' => ['web','auth','level:1']], function () {
    // Route::resource('brand', 'BrandController');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('rak', 'RakController');
    Route::resource('supplier', 'SupplierController');
    Route::resource('member', 'MemberController');

});