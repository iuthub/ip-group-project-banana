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

Route::get('/', [
	'uses' => 'ShopController@index',
	'as' => 'shop.index']);

Route::get('/products', [
	'uses' => 'ShopController@products',
	'as' => 'shop.products']);

Auth::routes();

// Route::get('/home', [
// 	'uses' => 'HomeController@index',
// 	'as' => 'home']);

Route::get('/cart', [
	'uses' => 'CartController@index',
	'as' => 'cart.index']);

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/add-to-cart/{id}', [
	'uses' => 'ShopController@getAddToCart',
	'as' => 'shop.addToCart',
]);

Route::get('/shopping-cart', [
	'uses' => 'ShopController@goToCart',
	'as' => 'shop.shoppingCart',
]);

