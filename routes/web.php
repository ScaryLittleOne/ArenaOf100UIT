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

route::get('usercontest','user_contest_controller@index');
route::get('histories/{$id}','user_contest_controller@show_histories');

route::post('userreceive_answer','user_contest_controller@receive_answer');
route::post('usertransmit_answer','user_contest_controller@transmit_answer')->name('usertransmit_answer');


Route::get('/admincontest','admin_contest_controller@index')->name('/admincontest');
Route::post('/admincontest','admin_contest_controller@change')->name('/admincontest');
Route::post('/adminchangecontest','admin_contest_controller@changecontest')->name('/adminchangecontest');
//Route::post('/admincontest','admin_contest_controller@show_history')->name('/admincontest'); //Route Test Cua History
Route::get('/history','admin_contest_controller@show_history')->name('/history'); //Route Test Cua History

Route::get('/statistic','admin_contest_controller@Statistic')->name('/statistic');
Route::get('/showusers','admin_contest_controller@show_users')->name('/showusers');
Route::get('/logout', function () {
	Auth::logout();
    return view('welcome');
});

Route::get('time','user_contest_controller@time');
Route::get('die',function(){
	return view('errors.500');
});