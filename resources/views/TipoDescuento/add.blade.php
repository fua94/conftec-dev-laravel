@extends('layout.home')

@section('title', 'Añadir Tipo de Descuento')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
          <form method="POST" action="/descuentos">
            @csrf
            <h2 class="header">Añadir Tipo de Descuento</h2>
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
                <input placeholder="Ingrese Código del Tipo de Descuento" name="CODIGOTIPODESCUENTO" type="text" class="validate" >
                <label for="CODIGOTIPODESCUENTO">Código del Tipo de Descuento *</label>
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
                <input placeholder="Ingrese Descripción del Tipo de Descuento" name="DESCRIPCIONTIPODESC" type="text" class="validate" >
                <label for="DESCRIPCIONTIPODESC">Descripción</label>
              </div>
              <div class="input-field col s12">
                  <i class="material-icons prefix fas fa-percent"></i>
                  <input type="text" class="validate"
                  name="PORCENTAJETIPODESC">
                  <label for="PORCENTAJETIPODESC">Ingrese el Porcentaje del Tipo de Descuento</label>
              </div>
            </div>
            <button type="submit" class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">check</i>Guardar</button>
            <a class="waves-effect waves-light blue darken-4 btn" href="{{url('/medidas')}}"><i class="material-icons left">cancel</i>Cancelar</a>
          </form>
        </div>
      </div>
    </div>


@endsection
