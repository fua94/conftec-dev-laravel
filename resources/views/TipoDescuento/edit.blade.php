@extends('layout.home')

@section('title', 'Editar Tipo de Descuento')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
          <form method="POST" action="/descuentos/{{$descuento->CODIGOTIPODESCUENTO}}">
            @csrf
            @method('PUT')
            <h2 class="header">Editar Tipo de Descuento</h2>
            <div class="col s12">
              <div class="input-field col s12">
                <input name="CODIGOTIPODESCUENTO" type="text" class="validate"
                value="{{$descuento->CODIGOTIPODESCUENTO}}" disabled>
                <label for="CODIGOTIPODESCUENTO">Código del Tipo de Descuento *</label>
              </div>
              <div class="input-field col s12">
                  <select name="CODIGOEMPRESA">
                      <option value="" disabled>Seleccione empresa</option>
                      <option value="{{$descuento['EMPRESA']->CODIGOEMPRESA}}" selected>{{$descuento['EMPRESA']->CODIGOEMPRESA}}</option>
                          @foreach ($empresas as $empresa)
                              @if ($descuento['EMPRESA']->CODIGOEMPRESA !== $empresa->CODIGOEMPRESA)
                                  <option value="{{$empresa->CODIGOEMPRESA}}">{{$empresa->CODIGOEMPRESA}}</option>
                              @endif
                          @endforeach
                  </select>
                  <label for="CODIGOEMPRESA">Código de la Empresa *</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Ingrese Descripción del Tipo de Descuento" name="DESCRIPCIONTIPODESC" type="text" class="validate"
                value="{{$descuento->DESCRIPCIONTIPODESC}}">
                <label for="DESCRIPCIONTIPODESC">Descripción</label>
              </div>
              <div class="input-field col s12">
                  <i class="material-icons prefix fas fa-percent"></i>
                  <input type="text" class="validate"
                  name="PORCENTAJETIPODESC"
                  value="{{$descuento->PORCENTAJETIPODESC}}">
                  <label for="PORCENTAJETIPODESC">Ingrese el Porcentaje del Tipo de Descuento</label>
              </div>
            </div>
            <button type="submit" class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">check</i>Guardar</button>
            <a class="waves-effect waves-light blue darken-4 btn" href="{{url('/descuentos')}}"><i class="material-icons left">cancel</i>Cancelar</a>
          </form>
        </div>
      </div>
    </div>
@endsection
