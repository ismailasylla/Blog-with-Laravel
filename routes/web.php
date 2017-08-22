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

Route::group(['middleware' => ['web']], function(){

    Route::get('/', 'pagesController@home');

    Route::get('/about', 'pagesController@about');

    Route::get('/contact', 'pagesController@contact');

    Route::resource('posts', 'postController');

});