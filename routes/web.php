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

Route::get('/', 'HomeController')->middleware('guest');

Route::group(['namespace'=>'Auth' ], function() {
	Route::post('/register', 'AuthenticationController@store');
	Route::post('/login', 'AuthenticationController@show');
	Route::get('/logout', 'AuthenticationController@logout');
});



Route::post('/add-new-asset', 'AssetController@store');
Route::post('/update/{asset}', 'AssetController@update');

Route::group(['prefix'=> 'profile'], function(){
	Route::get('/user/{user}', 'ProfileController@show');
});
