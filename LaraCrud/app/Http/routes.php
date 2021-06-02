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

Route::get('/', function () {
    return view('ProfileUser.index');
});

//Route::post('/addUser' , 'ProfileController@index');

Route::get('/addUser', function(){
	echo "Hello";
});

//Route::post('/save-category', 'CatgeoryController@save_category');
// Route::get('/admin','AdminController@index');
// Route::get('/addUser' , 'ProfileController@index');