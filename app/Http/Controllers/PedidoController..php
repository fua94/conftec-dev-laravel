<?php

namespace App\Http\Controllers;

use DB;
use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PedidoController extends Controller
{

    public function create()
    {
        try{            
            $sucursal = DB::table('sucursal')->select('*')->get();
            $cliente = DB::table('cliente')->select('*')->get();
            $pedidoT = DB::table('pedido')->select('*')->get();                
            //$pedido = Pedido::all();
            //$pedidoT = json_decode($pedido, true);   
        }catch(Exception $e)
        {
            return back()->withError($e->getMessage());
        }        
        return view('pedidoC.create', compact('sucursal', 'cliente', 'pedidoT'));
    }
    public function index()
    {
        $pedido = Pedido::paginate(5);       
        return view('pedidoC.index',['pedidoT'=>$pedido]);//vista,renombre,nombre variable
    }
    public function edit($numpedidoR)//abre la ventana para modificar
    {   
        try{                       
            $pedidoT = DB::table('pedido')->select('*')->select('*')->where('numpedido',$numpedidoR)->get(); 
            $sucursal = DB::table('sucursal')->select('*')->get();
            $cliente = DB::table('cliente')->select('*')->get();                     
        }catch(\Exception $e)
        {
           return back()->withError($e->getMessage());
        }
        return view('pedidoC.edit', compact('sucursal', 'cliente', 'pedidoT'));             
    }
    public function update(Request $request)//modificar
    {   
        $numpedido=Input::get('numpedido');
        $codigosucursal=$request->input('codigosucursal');
        $codigocliente= $request->input('codigocliente');    
        DB::table('pedido')->where('numpedido','=', $numpedido)->delete();
        Pedido::create([
            'numpedido'=>$numpedido,
            'codigosucursal'=>$codigosucursal,
            'codigocliente'=>$codigocliente
        ]);   
        return redirect('pedidoC')->with('success', 'Se modificó correctamente');
    }
    public function destroy($numpedidoR)
    {   
        try{
            DB::table('pedido')->where('numpedido',$numpedidoR)->delete();            
        
        }catch(\Exception $e){
            return back()->withError($e->getMessage());
        }            
        return redirect('pedidoC')->with('success','Se elimino correctamente');
    }
    public function store(Request $request){
        $numpedido=Input::get('numpedido');
        $codigosucursal=$request->input('codigosucursal');
        $codigocliente= $request->input('codigocliente');         
        Pedido::create([
            'codigosucursal'=>$codigosucursal,
            'codigocliente'=>$codigocliente
        ]);
        return redirect('pedidoC')->with('success', 'Se añadió correctamente');
    }
}