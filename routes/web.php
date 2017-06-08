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


Route::group(['prefix' => 'task'], function () {
    // LIST
    Route::get('/', ['as' => 'task.index', 'uses' => 'TaskController@index']);

    // CREATE | STORE
    Route::get('/create', ['as' => 'task.create', 'uses' => 'TaskController@create']);
    Route::post('task', ['as' => 'task.store', 'uses' => 'TaskController@store']);

    // EDIT | UPDATE
    Route::get('/{id}/edit', ['as' => 'task.edit', 'uses' => 'TaskController@edit'])->where('id',
        '[0-9]+');
    Route::put('/{id}', ['as' => 'task.update', 'uses' => 'TaskController@update'])->where('id',
        '[0-9]+');

    // DELETE
    Route::get('/{id}/delete', ['as' => 'task.destroy', 'uses' => 'TaskController@destroy']);
});

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
