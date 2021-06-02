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
    return view('welcome');
});

Route::get('/addUser' , 'UserController@createPage');

Route::post('/saveUser' ,'UserController@store');

Route::get('/editUser/{id}' , 'UserController@edit');

Route::post('/editUserSave/{id}' , 'UserController@update');