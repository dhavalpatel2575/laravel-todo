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

use Illuminate\Support\Facades\Route; 


Route::get('/', function () {
    return view('welcome');
});

Route::get('Todo','TodoController@index');

Route::get('Todo/{todo}','TodoController@show');

Route::get('create','TodoController@create');

Route::post('store','TodoController@store');

Route::get('/edit/{id}','TodoController@edit');

Route::post('/update/{id}','TodoController@update');

Route::get('delete/{id}','TodoController@delete');

Route::get('complete/{id}','TodoController@complete');