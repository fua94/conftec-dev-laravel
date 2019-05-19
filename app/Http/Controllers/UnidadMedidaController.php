<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UnidadMedida;
use App\Models\Empresa;

use Validator;

class UnidadMedidaController extends Controller
{
    protected $listaEmpresas;

    public function __construct()
    {
        $this->listaEmpresas = Empresa::get();
    }

    protected function validarDatos(Request $request){
        $mensajesError = [
            'CODIGOUNIDADMEDIDA.required' => '* Favor ingresar código de la unidad de medida'
        ];

        $validator = Validator::make($request->all(), [
            'CODIGOUNIDADMEDIDA' => 'required'
        ], $mensajesError);

        return $validator;
    }

    public function index()
    {
        $listaUnidadMedidas = UnidadMedida::get();
        return view('UnidadMedida/index', [
            'medidas' => $listaUnidadMedidas
        ]);
    }

    public function create()
    {
        return view('UnidadMedida/add', [
            'empresas' => $this->listaEmpresas,
        ]);
    }

    public function store(Request $request)
    {
        $validator = $this->validarDatos($request);

        if($validator->fails()){
            return redirect('/medidas/create')->withErrors($validator);
        }

        UnidadMedida::create($request->all());
        return redirect('/medidas');
    }

    public function show($id)
    {
        $medidaBuscada = UnidadMedida::findOrFail($id);
        return view('UnidadMedida/edit', [
            'medida' => $medidaBuscada,
            'empresas' => $this->listaEmpresas
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->merge(['CODIGOUNIDADMEDIDA' => $id]);
        UnidadMedida::findOrFail($id)->update($request->all());
        return redirect('/medidas');
    }

    public function showDeleteView(Request $request)
    {
        $medidaABorrar = $request->eliminar;
        return view('UnidadMedida/delete', [
            'medida' => $medidaABorrar
        ]);
    }

    public function destroy($id)
    {
        UnidadMedida::findOrFail($id)->delete();
        return redirect('/medidas');
    }

    public function buscar(Request $request)
    {
        $query = $request->SEARCH;

        $empresa = Empresa::where('NOMBREEMPRESA', 'LIKE', '%'.$query.'%')->first();

        if($empresa != null){
            $query = $empresa->CODIGOEMPRESA;
        }

        $listaUnidadMedidas = UnidadMedida::where('CODIGOUNIDADMEDIDA', 'LIKE', '%'.$query.'%')
                                    ->orWhere('CODIGOEMPRESA', 'LIKE', '%'.$empresa->CODIGOEMPRESA.'%')
                                    ->orWhere('NOMBREUNIDADMEDIDA', 'LIKE', '%'.$query.'%')
                                    ->orWhere('DESCRIPCIONUNIDADMEDIDA', 'LIKE', '%'.$query.'%')
                                    ->get();
        return view('UnidadMedida/index', [
            'medidas' => $listaUnidadMedidas
        ]);
    }
}
