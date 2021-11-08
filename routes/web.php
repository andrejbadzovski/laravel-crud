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

Route::get('/', '\App\Http\Controllers\ProductController@index');
Route::put('/products/{product}', '\App\Http\Controllers\ProductController@update')->name('products.update');
Route::post('/products', '\App\Http\Controllers\ProductController@store')->name('products.store');

Route::get('/products', '\App\Http\Controllers\ProductController@index');
Route::get('/products/create', '\App\Http\Controllers\ProductController@create')->name('products.create');
Route::get('/products/{product}/edit', '\App\Http\Controllers\ProductController@edit')->name('products.edit');
Route::get('/products/{product}', '\App\Http\Controllers\ProductController@show')->name('products.show');

Route::delete('/products/{product}', '\App\Http\Controllers\ProductController@destroy')->name('products.destroy');


