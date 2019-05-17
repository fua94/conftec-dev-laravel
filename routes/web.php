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

//Home

Route::get('/', function () {
    return view('index');
});

Route::get('/', 'FrontEndController@index');    
//detalles-pedidos
Route::resource('detallePedido', 'Detalle_PedidoController');
Route::post('actualizarDetallePedidoURL', 'Detalle_PedidoController@update');
//pedido
Route::resource('pedidoC', 'PedidoController');
Route::post('actualizarPedidoURL', 'PedidoController@update');
