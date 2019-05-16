<?php

namespace App\Http\Controllers;

use DB;
use App\Detalle_Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class Detalle_PedidoController extends Controller
{

    public function create()
    {
        try{
            $pedidos = DB::table('pedido')->select('*')->get();
            $productos = DB::table('producto_t')->select('*')->get();
            $tallas = DB::table('tallas')->select('*')->get();  
            $tallas2 = DB::table('tallas')->select('*')->get();                       
            $detalle_pedido = Detalle_Pedido::all();
            $detalle_pedidoT = json_decode($detalle_pedido, true);   
        }catch(Exception $e)
        {
            return back()->withError($e->getMessage());
        }        
        return view('detallePedido.create', compact('pedidos', 'productos', 'tallas', 'tallas2', 'detalle_pedidoT'));
    }
    public function index()
    {
        $detalle_pedido = Detalle_Pedido::paginate(5);       
        return view('detallePedido.index',['detalle_pedido'=>$detalle_pedido]);//vista,renombre,nombre variable
    }
    public function edit($numpedidoR)//abre la ventana para modificar
    {   
        try{           
            $detalle_pedido = DB::table('detalle_pedido')->select('*')->where('numpedido',$numpedidoR)->get(); 
            $pedidos = DB::table('pedido')->select('*')->get();
            $productos = DB::table('producto_t')->select('*')->get();
            $tallas = DB::table('tallas')->select('*')->get();  
            $tallas2 = DB::table('tallas')->select('*')->get();       
        }catch(\Exception $e)
        {
           return back()->withError($e->getMessage());
        }
        return view('detallePedido.edit', compact('pedidos', 'productos', 'tallas', 'tallas2', 'detalle_pedido'));        
    }
    public function update(Request $request)//modificar
    {   
        $numpedido=Input::get('numpedido');
        $codigoproductot=Input::get('codigoproductot');
        $totalunidadespedido= $request->input('totalunidadespedido');
        $denominaciontalla=Input::get('denominaciontalla');
        $talla=Input::get('talla');
        DB::table('detalle_pedido')->where('numpedido','=', $numpedido)->delete();
        Detalle_Pedido::create([
            'numpedido'=>$numpedido,
            'codigoproductot'=>$codigoproductot,
            'totalunidadespedido'=>$totalunidadespedido,
            'denominaciontalla'=>$denominaciontalla,
            'talla'=>$talla
        ]);   
        return redirect('detallePedido')->with('success', 'Se modificó correctamente');
    }
    public function destroy($numpedidoR)
    {   
        try{
            DB::table('detalle_pedido')->where('numpedido',$numpedidoR)->delete();
            $detalle_pedido = Detalle_Pedido::all(); 
        
        }catch(\Exception $e){
            return back()->withError($e->getMessage());
        }            
        return redirect('detallePedido')->with('success','Se elimino correctamente');
    }
    public function store(Request $request){
        $numpedido=Input::get('numpedido');
        $codigoproductot=Input::get('codigoproductot');
        $totalunidadespedido= $request->input('totalunidadespedido');
        $denominaciontalla=Input::get('denominaciontalla');
        $talla=Input::get('talla');
        Detalle_Pedido::create([
            'numpedido'=>$numpedido,
            'codigoproductot'=>$codigoproductot,
            'totalunidadespedido'=>$totalunidadespedido,
            'denominaciontalla'=>$denominaciontalla,
            'talla'=>$talla
        ]);
        return redirect('detallePedido')->with('success', 'Se añadió correctamente');
    }
}