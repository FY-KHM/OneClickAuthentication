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

Route::get('github/login', 'APIController@ghlogin');
Route::get('github/callback', 'APIController@ghcallback');

Route::get('facebook/login', 'APIController@fblogin');
Route::get('facebook/callback', 'APIController@fbcallback');

Route::get('google/login', 'APIController@gllogin');
Route::get('google/callback', 'APIController@glcallback');

Route::get('link/login', 'APIController@lilogin');
Route::get('link/callback', 'APIController@licallback');

Route::get('insta/login', 'APIController@inlogin');
Route::get('insta/callback', 'APIController@incallback');

Route::auth();

Route::get('/home', 'HomeController@index');
