<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@index');
//Route::get('content', 'ContactController@contact');
Route::get('content/{id?}', 'ContactController@contact');
Route::post('content/{id?}', 'ContactController@sendMail');
Route::get('gallery', 'GalleryController@index');
Route::get('gallery/{id}', 'GalleryController@showGallery');
Route::get('aboutUsCo', 'HomeController@aboutUsCo');
Route::get('products', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show');
Route::post('products/{id}', 'ProductController@registerOrder');