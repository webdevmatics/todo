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

/****  this will generate following routes */

// Route::get('/tasks','TasksController@index');                    //displays all tasks

// Route::get('/tasks/create','TasksController@create');            //displays create form

// Route::post('/tasks','TasksController@store');                   //submits data from create form

// Route::get('/tasks/{task}','TasksController@show');              //shows single task

// Route::get('/tasks/{task}/edit','TasksController@edit');          //displays edit form

// Route::put('/tasks/{task}','TasksController@update');            //submits edit form data

// Route::delete('/tasks/{task}', 'TasksController@destroy');       //deletes
