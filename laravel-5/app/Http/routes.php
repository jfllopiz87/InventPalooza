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

Route::get('/', 'WelcomeController@index');

Route::get('calendar', 'WelcomeController@calendar');

Route::get('home', 'HomeController@index');

Route::get('cart', 'CartController@index');


/* Admin Routes */
Route::group(array('prefix' => 'admin'), function () {
    Route::get('/','AdminController@index');
    Route::get('calendar','AdminController@calendar');
});


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
