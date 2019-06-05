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

Route::get('/','PessoaController@formulario') ;
Route::post('/post', 'PessoaController@store');
Route::get('/index', 'PessoaController@index');
Route::delete('delete/{id}', 'PessoaController@destroy');
Route::get('/edit/{id}' , 'PessoaController@edit');
Route::put('/edit/{id}' , 'PessoaController@edit');
Route::put('/edit/{id}' , 'PessoaController@update');