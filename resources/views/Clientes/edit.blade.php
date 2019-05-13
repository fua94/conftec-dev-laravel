@extends('layout.home')

@section('title', 'Editar Cliente')

@section('content')
<div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
          <form method="POST" action="/clientes/{{$cliente->CODIGOCLIENTE}}">
            @csrf
            @method('PUT')
            <h2 class="header">Editar Cliente</h2>
            <div class="col s12">
              <div class="input-field col s12">
                <input placeholder="Ingrese Código del Cliente" name="CODIGOCLIENTE" type="text" class="validate"
                value="{{$cliente->CODIGOCLIENTE}}">
                <label for="CODIGOCLIENTE">Código del cliente *</label>
              </div>
              <div class="input-field col s12">
                <select name="CODIGOEMPRESA">
                <option value="" disabled>Seleccione empresa</option>
                  <option value="{{$cliente['EMPRESA']->CODIGOEMPRESA}}" selected>{{$cliente['EMPRESA']->CODIGOEMPRESA}}</option>
                  @foreach ($empresas as $empresa)
                    @if ($cliente['EMPRESA']->CODIGOEMPRESA !== $empresa->CODIGOEMPRESA)
                      <option value="{{$empresa->CODIGOEMPRESA}}">{{$empresa->CODIGOEMPRESA}}</option>
                    @endif
                  @endforeach
                </select>
                <label for="CODIGOEMPRESA">Código de la Empresa *</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Nombre del cliente" name="NOMBRECLIENTE" type="text" class="validate"
                value="{{$cliente->NOMBRECLIENTE}}">
                <label for="NOMBRECLIENTE">Nombre</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Dirección del cliente" name="DIRECCIONCLIENTE" type="text" class="validate"
                value="{{$cliente->DIRECCIONCLIENTE}}">
                <label for="DIRECCIONCLIENTE">Dirección</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Empresa del cliente" name="EMPRESACLIENTE" type="text" class="validate"
                value="{{$cliente->EMPRESACLIENTE}}">
                <label for="EMPRESACLIENTE">Empresa del Cliente</label>
              </div>
              <div class="input-field col s12">
                <select name="TIPOCLIENTE">
                  <option value="" disabled>Seleccione tipo de cliente</option>
                  @if ($cliente->TIPOCLIENTE === 'H')
                    <option value="{{$cliente->TIPOCLIENTE}}" selected>Habitual</option>
                    <option value="C">Casual</option>
                  @elseif ($cliente->TIPOCLIENTE === 'C')
                    <option value="{{$cliente->TIPOCLIENTE}}" selected>Casual</option>
                    <option value="C">Habitual</option>
                  @endif
                </select>
                <label for="TIPOCLIENTE">Tipo del Cliente</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Email del cliente" name="EMAILCLIENTE" type="email" class="validate"
                value="{{$cliente->EMAILCLIENTE}}">
                <label for="EMAILCLIENTE">Email</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Teléfono del cliente" name="TELEFONOCLIENTE" type="text" class="validate"
                value="{{$cliente->TELEFONOCLIENTE}}">
                <label for="TELEFONOCLIENTE">Teléfono</label>
              </div>
              <div class="input-field col s12">
                <select name="CODIGOCIUDADCLIENTE">
                  <option value="" disabled>Seleccione ciudad</option>
                  <option value="{{$cliente['CIUDAD']->CODIGOCIUDAD}}" selected>{{$cliente['CIUDAD']->CODIGOCIUDAD}}</option>
                  @foreach ($ciudades as $ciudad)
                    @if ($cliente['CIUDAD']->CODIGOCIUDAD !== $ciudad->CODIGOCIUDAD)
                      <option value="{{$ciudad->CODIGOCIUDAD}}">{{$ciudad->CODIGOCIUDAD}}</option>
                    @endif
                  @endforeach
                </select>
                <label for="CODIGOCIUDADCLIENTE">Código de la Ciudad</label>
              </div>
            </div>
            <button type="submit" class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">check</i>Guardar</button>
            <a class="waves-effect waves-light blue darken-4 btn" href="{{url('/clientes')}}"><i class="material-icons left">cancel</i>Cancelar</a>
          </form>
        </div>
      </div>
    </div>


@endsection
