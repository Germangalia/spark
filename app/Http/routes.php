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

Route::get('/', function () {
<<<<<<< HEAD
	return view('spark::welcome');
=======
    return view('welcome');
>>>>>>> b904107ff4374abd519faf30d960c241bc2333a3
});

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

<<<<<<< HEAD

Route::group(['middleware' => 'web'], function () {
    Route::get('home', ['middleware' => 'auth', function () {
        return view('home');
    }]);
=======
Route::group(['middleware' => ['web']], function () {
    //
>>>>>>> b904107ff4374abd519faf30d960c241bc2333a3
});
