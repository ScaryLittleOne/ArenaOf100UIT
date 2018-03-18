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
<<<<<<< HEAD

Route::resource('users','user_controller');
Auth::routes();
Route::get('/home','HomeController@index')->name('home');
=======
Route::resource('questions', 'question_controller');
<<<<<<< HEAD
Route::resource('users', 'user_controller');
=======

<<<<<<< HEAD
=======
Route::get('questions/show/{id}', 'question_controller@show');

>>>>>>> 1075b2535649fc9e26666440a7eac1e976a5d0b0
>>>>>>> 5a9da952e11041b1936c9fb830aec6a7e19f605d
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

>>>>>>> 4e1651dd463482a6611141b0d9805f8a9064363b
