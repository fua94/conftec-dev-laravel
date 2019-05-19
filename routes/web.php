<?php

Route::get('/', function () {
    return view('index');
});

//clientes
Route::resource('/clientes', 'ClienteController');
Route::post('/clientes/buscar', 'ClienteController@buscar')->name('clientes.find');
Route::get('/cliente', 'ClienteController@showDeleteView');

//unidad medida
Route::resource('/medidas', 'UnidadMedidaController');
Route::post('/medidas/buscar', 'UnidadMedidaController@buscar')->name('medidas.find');
Route::get('/medida', 'UnidadMedidaController@showDeleteView');
