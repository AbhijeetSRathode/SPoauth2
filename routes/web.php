<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () { 
    return "AVi";
});

Route::get('/home','Front@index');

Route::get('/hello/{name}', 'Hello@show');

Route::get('/hello',function(){
    if(Auth::check()) 
			return view('home', array('page' => 'home'));
	else
		return view('sharepoint_login', array('page' => 'home','link'=>"sharepoint_loginlink"));
});

Route::get("/sharepoint_loginlink",'AuthController@login');
Route::get("/dump",'AuthController@login_dump');
