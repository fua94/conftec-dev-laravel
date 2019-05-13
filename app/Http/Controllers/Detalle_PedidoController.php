<?php

namespace App\Http\Controllers;

use DB;
use App\DetallePedidoModel;
use Illuminate\Http\Request;

class Detalle_PedidoController extends Controller
{

    public function create()
    {
        try{
            $pedidos = DB::table('pedido')->select('*')->get();
            $productos = DB::table('producto_t')->select('*')->get();
            $detalle_pedido = DB::table('detalle_pedido')->select('*')->get();      
        }catch(Exception $e)
        {
            return back()->withError($e->getMessage());
        }
        return view('detallePedido.create', compact('pedidos', 'productos','detalle_pedido'));
    }
    public function index()
    {
        $detalle_pedidoVar = DB::table('detalle_pedido')->select('*')->get();   
        return view('detallePedido.index',['detalle_pedido'=>$detalle_pedidoVar]);//vista,renombre,nombre variable
    }
    
}