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

Route::get('/', 'HomeController@index');

Route::prefix('clientes')->group(function() {
    Route::get('/', 'ClienteController@index');
    Route::get('create', 'ClienteController@create');
    Route::post('/', 'ClienteController@store');
    Route::get('{id}/edit', 'ClienteController@edit');
    Route::put('{id}', 'ClienteController@update');
    Route::delete('{id}', 'ClienteController@destroy');
    Route::get('{id}/emprestimos', 'EmprestimoController@index');
});

Route::prefix('emprestimos')->group(function() {
    Route::get('create', 'EmprestimoController@create');
    Route::post('/', 'EmprestimoController@store');
});
