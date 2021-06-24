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
    return view('main');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("goals", "GoalController")->middleware('auth');

Route::resource("goals.todos", "TodoController")->middleware('auth');

Route::post('/goals/{goal}/todos/{todo}/sort', 'TodoController@sort')->middleware('auth');

Auth::routes();

Route::get('user/page', 'UserController@index');
Route::get('user/mygoal2', 'UserController@goal');
Route::get('user/mygoal3', 'UserController@goal2');
Route::get('user/info', 'UserController@show');
Route::get('user/edit', 'UserController@edit');
Route::get('user/pass', 'UserController@update');

Route::get('user/{mygoal?}', 'UserController@show');
Route::post('user/mygoal', 'UserController@create');
