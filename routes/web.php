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


Route::group(['middleware'=>'ClearCacheMiddleware'],function(){
    Auth::routes();
    Route::group(['middleware'=>'LoginMiddleware'],function(){
        Route::get('/','user\ClientController@index');
        Route::post('add-post','user\PostController@add');
        Route::get('post-detail/{id}','user\PostController@post');
        Route::post('comment','user\CommentController@comment');
    });
    Route::group(['prefix'=>'admin','middleware'=>'IsAdminMiddleware'],function(){
        Route::get('list','admin\PostController@index');
        Route::group(['prefix'=>'category'],function(){
            Route::get('add-cate','admin\CategoryController@addForm');
            Route::get('add','admin\CategoryController@add');
        });
        Route::get('update-comment/{id}','admin\CommentController@update');
        Route::get('comment-list','admin\CommentController@index');
    });
});

