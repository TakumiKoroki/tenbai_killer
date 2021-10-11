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

use Illuminate\support\Facades\Route;


Route::get('/', 'BuyerController@index');
Route::get('/buyers/create', 'BuyerController@create');
Route::get('/buyers/{buyer}', 'BuyerController@show');
Route::get('/buyers/{buyer}/edit', 'BuyerController@edit');
Route::put('/buyers/{buyer}', 'BuyerController@update');
Route::post('/buyers', 'BuyerController@store');

Route::get('/sellers/', 'SellerController@index');
Route::get('/sellers/create', 'SellerController@create');
Route::get('/sellers/{seller}', 'SellerController@show');
Route::get('/sellers/{seller}/edit', 'SellerController@edit');
Route::put('/sellers/{seller}', 'SellerController@update');
Route::post('/sellers', 'SellerController@store');

Route::get('/products/', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::get('/products/{product}', 'ProductController@show');
Route::get('/products/{product}/edit', 'ProductController@edit');
Route::put('/products/{product}', 'ProductController@update');
Route::post('/products', 'ProductController@store');