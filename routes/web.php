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

    Route::get('/contact', 'pagesController@getContact');
    Route::post('/contact', 'pagesController@postContact');



    //comments route
    Route::post('comments/{post_id}',['uses'=>'CommentsController@store', 'as'=>'comments.store']);
    Route::get('comments/{id}/edit',['uses'=>'CommentsController@edit', 'as'=>'comments.edit']);
    Route::put('comments/{id}',['uses'=>'CommentsController@update', 'as'=>'comments.update']);
    Route::delete('comments/{id}/destroy',['uses'=>'CommentsController@destroy', 'as'=>'comments.destroy']);
    Route::get('comments/{id}/delete',['uses'=>'CommentsController@delete', 'as'=>'comments.delete']);

    Auth::routes();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


    Route::prefix('admin')->group(function(){

//        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
//        Route::get('/', 'AdminController@index')->name('admin.dashboard');
//        Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
//
//        Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
//        Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//        Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
//        Route::get('/password/reset{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

        Route::resource('/posts', 'postController');

        Route::resource('/categories','CategoryController',['only'=>['create','index','store']]);
        Route::resource('/tags','TagController',['except'=>['create']]);

});



});
