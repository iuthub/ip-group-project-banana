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



Route::get('/', [
	'uses' => 'ShopController@index',
	// 'middleware' => 'frame',
	'as' => 'shop.index']);

Route::get('/products', [
	'uses' => 'ShopController@products',
	// 'middleware' => 'frame',
	'as' => 'shop.products']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::post('/store', [
	'uses' => 'ShopController@store',
	'as' => 'shop.store',
]);

Route::get('/profile', [
	'uses' => 'UserController@index',
	'as' => 'user.profile',
]);

Route::get('/dismiss', [
	'uses' => 'UserController@dismiss',
	'as' => 'user.dismiss',
]);

Route::get('/admin', [
	'uses' => 'UserController@admin',
	'middleware' => 'admin',
	'as' => 'user.admin',
]);

Route::get('/admin/delete/{id}', [
	'uses' => 'UserController@delete',
	'middleware' => 'admin',
	'as' => 'user.admin.delete',
]);

Route::get('/contact', [
	'uses' => 'MailController@index',
	'as' => 'shop.contact',
]);

Route::post('/contact/send', [
	'uses' => 'MailController@send',
	'as' => 'shop.contact.send',
]);



