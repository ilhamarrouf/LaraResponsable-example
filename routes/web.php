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

Route::resource('users', 'UserController');

Route::get('/admin/products/sales', 'AdminProductSalesController@index');
Route::get('/admin/products/{product}/sales', 'AdminProductSalesController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
