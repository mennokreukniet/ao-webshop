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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'CategoryController@index')->name('home');

Route::get('/category/{id}', 'CategoryController@getCategory')->name('category');

Route::get('/product/{id}', 'ProductController@index')->name('product');

Route::get('/cart', 'ShoppingCartController@index')->name('cart');