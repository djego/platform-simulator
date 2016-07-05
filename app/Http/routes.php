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
    return view('auth.login');
});
Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/api', 'ApiController@userConnect');

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('students', 'ManagerController@students');
    Route::get('scores', 'ManagerController@scores');
    Route::get('courses', 'ManagerController@courses');
});