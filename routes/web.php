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

Route::post('product/create', 'ProductController@createProduct');
Route::put('product/update/{id}', 'ProductController@updateProduct');
Route::get('product/delete/{id}', 'ProductController@deleteProduct');
Route::get('product', 'ProductController@index');