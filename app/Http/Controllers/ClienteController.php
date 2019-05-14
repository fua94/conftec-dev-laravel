<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Ciudad;

use Validator;

class ClienteController extends Controller
{
    protected $listaEmpresas;
    protected $listaCiudades;

    public function __construct()
    {
        $this->listaEmpresas = Empresa::get();
        $this->listaCiudades = Ciudad::get();
    }

    protected function validarDatos(Request $request){
        $mensajesError = [
            'CODIGOCLIENTE.required' => '* Favor ingresar código cliente',
            'EMPRESACLIENTE.required' => '* Favor ingresar empresa cliente',
            'EMAILCLIENTE.email' => '* El campo email debe contener @ tenga una terminación con .com o .es o similares',
            'TELEFONOCLIENTE.digits' => '* El campo teléfono debe contener solo números y 10 dígitos'
        ];

        $validator = Validator::make($request->all(), [
            'CODIGOCLIENTE' => 'required',
            'EMPRESACLIENTE' => 'required',
            'EMAILCLIENTE' => 'email',
            'TELEFONOCLIENTE' => 'digits:10'
        ], $mensajesError);

        return $validator;
    }

    public function index()
    {
        $listaClientes = Cliente::get();
        return view('Clientes/index', [
            'clientes' => $listaClientes
        ]);
    }

    public function create()
    {
        return view('Clientes/add', [
            'empresas' => $this->listaEmpresas,
            'ciudades' => $this->listaCiudades
        ]);
    }

    public function show($cliente)
    {
        $clienteBuscado = Cliente::findOrFail($cliente);
        return view('Clientes/edit', [
            'cliente' => $clienteBuscado,
            'empresas' => $this->listaEmpresas,
            'ciudades' => $this->listaCiudades
        ]);
    }

    public function showDeleteView(Request $request)
    {
        $clienteABorrar = $request->eliminar;
        return view('Clientes/delete', [
            'cliente' => $clienteABorrar
        ]);
    }

    public function store(Request $request)
    {
        $validator = $this->validarDatos($request);

        if($validator->fails()){
            return redirect('/clientes/create')->withErrors($validator);
        }

        Cliente::create($request->all());
        return redirect('/clientes');
    }

    public function update(Request $request, $id)
    {
        $request->merge(['CODIGOCLIENTE' => $id]);
        $validator = $this->validarDatos($request);

        if($validator->fails()){
            return redirect('/clientes/'. $id)->withErrors($validator);
        }

        Cliente::findOrFail($id)->update($request->all());
        return redirect('/clientes');
    }

    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();
        return redirect('/clientes');
    }

    public function buscar(Request $request)
    {
        $query = $request->SEARCH;
        $listaClientes = Cliente::where('CODIGOCLIENTE', 'LIKE', '%'.$query.'%')
                                    ->orWhere('NOMBRECLIENTE', 'LIKE', '%'.$query.'%')
                                    ->orWhere('DIRECCIONCLIENTE', 'LIKE', '%'.$query.'%')
                                    ->orWhere('EMPRESACLIENTE', 'LIKE', '%'.$query.'%')
                                    ->orWhere('EMAILCLIENTE', 'LIKE', '%'.$query.'%')
                                    ->orWhere('TELEFONOCLIENTE', 'LIKE', '%'.$query.'%')
                                    ->get();
        return view('Clientes/index', [
            'clientes' => $listaClientes
        ]);
    }
}
