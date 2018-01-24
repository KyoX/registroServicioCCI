<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// routers raiz
Auth::routes();
Route::get('/', function () {
    return view('layouts/welcome');
});

// routers que muestran los datos en general
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/servidores', 'ServidorController@index');
Route::get('/servicios', 'ServicioController@index');
Route::get('/equipos', 'EquipoController@index');
Route::get('/ministerios', 'MinisterioController@index');
Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

// los que muestran los detalles especificos de cada uno de los elementos
Route::get('/ministerios/{id}', 'MinisterioController@show')->where('id', '[0-9]+')->name('ministerios');
Route::get('/servidores/{id}', 'ServidorController@show')->where('id', '[0-9]+')->name('servidores');
Route::get('/servicios/{fecha}', 'ServicioController@show');

// guarda los datos ya sea de elementos nuevos o actualizacion de los existentes
Route::post('/ministerios', 'MinisterioController@store');
Route::post('/servidores', 'ServidorController@store');
Route::post('/servicios', 'ServicioController@store');

// elimina el elemento en especifico
Route::get('/ministerios/{id}/delete', 'MinisterioController@destroy')->where('id', '[0-9]+')->name('ministerios');
Route::get('/servidores/{id}/delete', 'ServidorController@destroy')->where('id', '[0-9]+')->name('servidores');
Route::get('/servicios/{fecha}/delete', 'ServicioController@destroy');