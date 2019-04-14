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
    return view('frontend/fronthome');
});
Route::get('/','Frontend\HomeController@index');
//Auth::routes();
Route::get('/about','Frontend\AboutController@index');
Route::get('/blog','Frontend\BlogController@index');
Route::get('/blog-single','Frontend\Blog_singleController@index');
Route::get('/contact','Frontend\ContactController@index');
Route::get('/menu','Frontend\ManuController@index');
Route::get('/services','Frontend\ServicesController@index');