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
    return view('layouts/welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/servidores', 'ServidorController@index');
Route::get('/equipos', 'EquipoController@index');
Route::get('/servicios', 'ServicioController@index');
Route::get('/ministerios', 'MinisterioController@index');
Route::get('/ministerios/{id}', 'MinisterioController@show')->where('id', '[0-9]+')->name('ministerios');
Route::post('/ministerios', 'MinisterioController@store');
Route::get('/ministerios/{id}/delete', 'MinisterioController@destroy')->where('id', '[0-9]+')->name('ministerios');
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});
