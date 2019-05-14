@extends('layout.home')

@section('title', 'Añadir Cliente')

@section('content')
<div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
          <form method="POST" action="/clientes">
            @csrf
            <h2 class="header">Añadir Cliente</h2>
            @if ($errors->any())
                <div class="col s12">
                  <div class="card">
                    <div class="card-content">
                      <span class="card-title">Error!</span>
                      @foreach ($errors->all() as $error)
                      		<span class="helper-text red-text" data-error="wrong" data-success="right">{{$error}}</span>
                              <br>
                      	@endforeach
                    </div>
                  </div>
                </div>
            @endif
            <div class="col s12">
              <div class="input-field col s12">
                <input placeholder="Ingrese Código del Cliente" name="CODIGOCLIENTE" type="text" class="validate" >
                <label for="CODIGOCLIENTE">Código del cliente *</label>
              </div>
              <div class="input-field col s12">
                <select name="CODIGOEMPRESA">
                  <option value="" disabled selected>Seleccione empresa</option>
                  @foreach ($empresas as $empresa)
                    <option value="{{$empresa->CODIGOEMPRESA}}">{{$empresa->CODIGOEMPRESA}}</option>
                  @endforeach
                </select>
                <label for="CODIGOEMPRESA">Código de la Empresa *</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Nombre del cliente" name="NOMBRECLIENTE" type="text" class="validate" >
                <label for="NOMBRECLIENTE">Nombre</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Dirección del cliente" name="DIRECCIONCLIENTE" type="text" class="validate" >
                <label for="DIRECCIONCLIENTE">Dirección</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Empresa del cliente" name="EMPRESACLIENTE" type="text" class="validate" >
                <label for="EMPRESACLIENTE">Empresa del Cliente</label>
              </div>
              <div class="input-field col s12">
                <select name="TIPOCLIENTE">
                  <option value="" disabled selected>Seleccione tipo de cliente</option>
                  <option value="H">Habitual</option>
                  <option value="C">Casual</option>
                </select>
                <label for="TIPOCLIENTE">Tipo del Cliente</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Email del cliente" name="EMAILCLIENTE" type="email" class="validate" >
                <label for="EMAILCLIENTE">Email</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Teléfono del cliente" name="TELEFONOCLIENTE" type="text" class="validate" >
                <label for="TELEFONOCLIENTE">Teléfono</label>
              </div>
              <div class="input-field col s12">
                <select name="CODIGOCIUDADCLIENTE">
                  <option value="" disabled selected>Seleccione ciudad</option>
                  @foreach ($ciudades as $ciudad)
                    <option value="{{$ciudad->CODIGOCIUDAD}}">{{$ciudad->CODIGOCIUDAD}}</option>
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
