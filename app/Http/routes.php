<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/','HomeController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => ['web']], function () {
	Route::get('product/{id}/{tensanpham}',['as'=>'product','uses'=>'ProductController@detail']);
	Route::get('/','HomeController@index');
    Route::group(['prefix'=>'admin'],function(){
		Route::group(['prefix'=>'cate'],function(){
			Route::get('list',['as'=>'admin.cate.list','uses'=>'CateController@getList']);
			Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
			Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
			Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
			Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
		});
	});
	Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'post'],function(){
			Route::get('list',['as'=>'admin.post.list','uses'=>'PostController@getList']);
			Route::get('add',['as'=>'admin.post.getAdd','uses'=>'PostController@getAdd']);
			Route::post('add',['as'=>'admin.post.postAdd','uses'=>'PostController@postAdd']);
			Route::get('delete/{id}',['as'=>'admin.post.getDelete','uses'=>'PostController@getDelete']);
			Route::get('edit/{id}',['as'=>'admin.post.getEdit','uses'=>'PostController@getEdit']);
			Route::get('delImg/{id}',['as'=>'admin.post.getDelImg','uses'=>'PostController@getDelImg']);
			Route::post('edit/{id}',['as'=>'admin.post.postEdit','uses'=>'PostController@postEdit']);
			Route::get('search',['as'=>'admin.post.search','uses'=>'PostController@search']);
		});
	});
});
