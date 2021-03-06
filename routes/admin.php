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
Auth::routes();
Route::get('/admin', 'HomeController@index')->name('home');
Route::resource('/admin/categories', 'Admin\CategoriesController', ['as'=>'admin']);
Route::resource('/admin/products', 'Admin\ProductsController', ['as'=>'admin']);
Route::resource('/admin/products/update', 'Admin\ProductsController@update');
Route::get('/admin/photo', 'PhotoController@index');
Route::post('/admin/photo', 'PhotoController@upload');

