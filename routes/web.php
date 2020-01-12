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

Route::resource('tasks','TasksController');

// this will generate following routes

// Route::get('/tasks','TasksController@index');

// Route::get('/tasks/create','TasksController@create');

// Route::post('/tasks','TasksController@store');

// Route::get('/tasks/{task}','TasksController@show');

// Route::get('/tasks/edit/{task}','TasksController@edit');

// Route::put('/tasks/{task}','TasksController@update');

// Route::delete('/tasks/{task}', 'TasksController@destroy');
