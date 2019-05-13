<?php

namespace App\Http\Controllers;

use DB;
use App\Detalle_Pedido;
use Illuminate\Http\Request;

class Detalle_PedidoController extends Controller
{

    public function create()
    {
        try{
            $pedidos = DB::table('pedido')->select('*')->get();
            $productos = DB::table('producto_t')->select('*')->get();
            //$detalle_pedido = DB::table('detalle_pedido')->select('*')->get();     
            $detalle_pedido = Detalle_Pedido::all();
            $detalle_pedidoT = json_decode($detalle_pedido, true);   
        }catch(Exception $e)
        {
            return back()->withError($e->getMessage());
        }        
        return view('detallePedido.create', compact('pedidos', 'productos','detalle_pedidoT'));
    }
    public function index()
    {
        
        $detalle_pedido = Detalle_Pedido::all(); 
        //DD($detalle_pedido);
        return view('detallePedido.index',['detalle_pedido'=>$detalle_pedido]);//vista,renombre,nombre variable
    }
        public function edit($numpedidoR)//abre la ventana para modificar
        {   
        //try{
            $pedidos = DB::table('pedido')->select('*')->where('numpedido',$numpedidoR)->get();
            $detalle_pedido = DB::table('detalle_pedido')->select('*')->where('numpedido',$numpedidoR)->get();
            $productos = DB::table('producto_t')->select('codigoproductot',$detalle_pedido['codigoproductot'])->get();
        //}catch(\Exception $e)
        //{
            return back()->withError($e->getMessage());
        //}
        return view('detallePedido.edit',compact('pedidos','productos','detalle_pedido'));
    }
    public function update(Request $request)//modificar
    {   
        $codperiodo = $request->input('codperiodo');
        $cedprofesor = $request->input('cedprofesor');    
        $asignaturas = $request->input('asignaturas');
        DB::table('glosarios')->where('cedprofesor','=', $cedprofesor)->delete();
        foreach( $asignaturas as $asignatura){
            $asigs= DB::table('asignaturas')->select('codasignatura')->where('descasignatura','=',$asignatura)->get();
            $codasignatura;
            foreach ($asigs as $asig){
                $codasignatura = $asig->codasignatura;
            }
            DB::table('glosarios')->insert([
                'codasignatura'=>$codasignatura,
                'cedprofesor'=>$cedprofesor,
                'codperiodo'=>$codperiodo,               
                ]);
        }
        return redirect('glosarios')->with('success', 'Se modificó correctamente');
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
}