<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TipoDescuento;
use App\Models\Empresa;

use Validator;

class TipoDescuentoController extends Controller
{
    protected $listaEmpresas;

    public function __construct()
    {
        $this->listaEmpresas = Empresa::get();
    }

    protected function validarDatos(Request $request){
        $mensajesError = [
            'CODIGOTIPODESCUENTO.required' => '* Favor ingresar código del tipo de descuento'
        ];

        $validator = Validator::make($request->all(), [
            'CODIGOTIPODESCUENTO' => 'required'
        ], $mensajesError);

        return $validator;
    }

    public function index()
    {
        $listatipoDescuentos = TipoDescuento::get();
        return view('TipoDescuento/index', [
            'descuentos' => $listatipoDescuentos
        ]);
    }


    public function create()
    {
        return view('TipoDescuento/add', [
            'empresas' => $this->listaEmpresas,
        ]);
    }

    public function store(Request $request)
    {
        $validator = $this->validarDatos($request);

        if($validator->fails()){
            return redirect('/descuentos/create')->withErrors($validator);
        }

        TipoDescuento::create($request->all());
        return redirect('/descuentos');
    }

    public function show($id)
    {
        $descuentoBuscado = TipoDescuento::findOrFail($id);
        return view('TipoDescuento/edit', [
            'descuento' => $descuentoBuscado,
            'empresas' => $this->listaEmpresas
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->merge(['CODIGOTIPODESCUENTO' => $id]);
        TipoDescuento::findOrFail($id)->update($request->all());
        return redirect('/descuentos');
    }

    public function showDeleteView(Request $request)
    {
        $descuentoABorrar = $request->eliminar;
        return view('TipoDescuento/delete', [
            'descuento' => $descuentoABorrar
        ]);
    }

    public function destroy($id)
    {
        TipoDescuento::findOrFail($id)->delete();
        return redirect('/descuentos');
    }

    public function buscar(Request $request)
    {
        $query = $request->SEARCH;

        $empresa = Empresa::where('NOMBREEMPRESA', 'LIKE', '%'.$query.'%')->first();

        if($empresa != null){
            $query = $empresa->CODIGOEMPRESA;
        }

        $listaTipoDescuentos = TipoDescuento::where('CODIGOTIPODESCUENTO', 'LIKE', '%'.$query.'%')
                                    ->orWhere('CODIGOEMPRESA', 'LIKE', '%'.$query.'%')
                                    ->orWhere('DESCRIPCIONTIPODESC', 'LIKE', '%'.$query.'%')
                                    ->orWhere('PORCENTAJETIPODESC', 'LIKE', '%'.$query.'%')
                                    ->get();

        return view('TipoDescuento/index', [
            'descuentos' => $listaTipoDescuentos
        ]);
    }
}
