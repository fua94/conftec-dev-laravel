<?php

Route::get('/', function () {
    return view('index');
});

Route::resource('/clientes', 'ClienteController');
Route::post('/clientes/buscar', 'ClienteController@buscar')->name('clientes.find');
//Route::get('/clientes/editar/{$id}', 'ClienteController@edit')

//Route::get('/clientes/add', 'ClienteController@add');
