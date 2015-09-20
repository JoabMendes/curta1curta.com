<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::group(['prefix' => 'auth'], function(){ 
	Route::get('login', 'UserController@index');
	Route::post('login', 'Auth\AuthController@postLogin');
	Route::get('logout', 'Auth\AuthController@getLogout');
});


Route::get('/','PostController@index');
 
Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);

Route::get('/admin' , 'UserController@index');

//authentication
/*Route::controllers([
 	'auth' => 'Auth\AuthController',
 	'password' => 'Auth\PasswordController',
]);*/

// check for logged in user
Route::group(['middleware' => ['auth']], function(){
	 // show new post form
	 Route::get('new-post','PostController@create');
	 
	 // save new post
	 Route::post('new-post','PostController@store');
	 
	 // edit post form
	 Route::get('edit/{slug}','PostController@edit');
	 
	 // update post
	 Route::post('update','PostController@update');
	 
	 // delete post
	 Route::get('delete/{id}','PostController@destroy');
});
