@extends('layout.home')

@section('content')
<div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
          <form method="POST" action="/clientes">
            @csrf
            <h2 class="header">Añadir Cliente</h2>
            <!-- 'CODIGOCLIENTE',
        'CODIGOEMPRESA',
        'NOMBRECLIENTE',
        'DIRECCIONCLIENTE',
        'EMPRESACLIENTE',
        'TIPOCLIENTE',
        'EMAILCLIENTE',
        'TELEFONOCLIENTE',
        'CODIGOCIUDADCLIENTE'-->
            <div class="col s12">
              <div class="input-field col s12">
                <input placeholder="Ingrese Código del Cliente" name="CODIGOCLIENTE" type="text" class="validate" >
                <label for="CODIGOCLIENTE">Código del cliente *</label>
              </div>
              <!--div class="input-field col s12">
                <input placeholder="Ingrese Código del cliente" id="codigo_cliente" type="text" class="validate" >
                <label for="codigo_cliente">Código de la Empresa*</label>
              </div-->
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
              <!--div class="input-field col s12">
                <input placeholder="Ingrese Empresa del cliente" id="empresa_cliente" type="text" class="validate" >
                <label for="empresa_cliente">Empresa del Cliente</label>
              </div-->
              <div class="input-field col s12">
                <input placeholder="Ingrese Email del cliente" name="EMAILCLIENTE" type="email" class="validate" >
                <label for="EMAILCLIENTE">Email</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Teléfono del cliente" name="TELEFONOCLIENTE" type="text" class="validate" >
                <label for="TELEFONOCLIENTE">Teléfono</label>
              </div>
              
            </div>
            <button type="submit" class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">check</i>Guardar</button>
            <a class="waves-effect waves-light blue darken-4 btn" href="{{url('/clientes')}}"><i class="material-icons left">cancel</i>Cancelar</a>
          </form> 
        </div>
      </div>
    </div>

    
@endsection
