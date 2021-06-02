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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , function(){
	return view('profile.newuser');
});

Route::post('/save_user' , 'ProfileController@store');

Route::get('/show_user' , 'ProfileController@index');

Route::get('/edit_user/{id}' , 'ProfileController@edit');

Route::post('/edit_user_data/{id}' , 'ProfileController@update');