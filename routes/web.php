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

    Route::get('blog/{slug}', ['as'=> 'blog.single','uses' =>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
    Route::get('blog',['uses'=>'BlogController@getIndex', 'as'=>'blog.index']);


    Route::get('/', 'pagesController@getIndex');

    Route::get('/about', 'pagesController@about');

    Route::get('/contact', 'pagesController@contact');

    Route::resource('posts', 'postController');

});
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
