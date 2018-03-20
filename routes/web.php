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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('users','user_controller');

Route::get('/home','HomeController@index');

Route::resource('questions', 'question_controller');

route::get('contest','user_contest_controller@index');
route::post('contest','user_contest_controller@receive_answer');

Route::get('/admincontest','admin_contest_controller@index')->name('/admincontest');
Route::post('/admincontest','admin_contest_controller@change')->name('/admincontest');
//Route::post('/admincontest','admin_contest_controller@show_history')->name('/admincontest'); //Route Test Cua History

Route::get('/logout', function () {
	Auth::logout();
    return view('welcome');
});

