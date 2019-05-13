<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $listaClientes = Cliente::get();
        return view('Clientes/index', [
            'clientes' => $listaClientes
        ]);
    }

    public function create()
    {
        return view('Clientes/add');
    }

    public function show($cliente)
    {
        $cliente = Cliente::findOrFail($cliente);
        return view('Clientes/edit', [
            'cliente' => $cliente
        ]);
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

    public function store(Request $request)
    {
        Cliente::create($request->all());
        return redirect('/clientes');
    }

    public function update(Request $request, $id)
    {
        Cliente::findOrFail($id)->update($request->all());
        return redirect('/clientes');
    }

    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();
        return redirect('/clientes');
    }
}
