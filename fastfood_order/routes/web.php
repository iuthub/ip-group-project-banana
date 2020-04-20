<?php

use Illuminate\Support\Facades\Route;

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
//     return view('shop.index');
// });

// Route::get('/products', function () {
//     return view('shop.products');
// });

Route::get('/', 'ShopController@index')->name('shop.index');

Route::get('/products', 'ShopController@products')->name('shop.products');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

