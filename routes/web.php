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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('user/page', 'UserController@index');
Route::get('user/mygoal', 'UserController@store');
Route::get('user/info', 'UserController@show');
Route::get('user/edit', 'UserController@edit');
Route::get('user/pass', 'UserController@update');
Route::get('user/register', 'UserController@create');

Route::get('main', 'HomeController@show');