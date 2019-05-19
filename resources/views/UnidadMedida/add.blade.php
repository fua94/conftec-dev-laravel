@extends('layout.home')

@section('title', 'Añadir Unidad de Medida')

@section('content')
<div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
          <form method="POST" action="/medidas">
            @csrf
            <h2 class="header">Añadir Unidad de Medida</h2>
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
                <input placeholder="Ingrese Código de la Unidad de Medida" name="CODIGOUNIDADMEDIDA" type="text" class="validate" >
                <label for="CODIGOUNIDADMEDIDA">Código de la Unidad de Medida *</label>
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
                <input placeholder="Ingrese Nombre de la Unidad de Medida" name="NOMBREUNIDADMEDIDA" type="text" class="validate" >
                <label for="NOMBREUNIDADMEDIDA">Nombre de la Unidad de Medida</label>
              </div>
              <div class="input-field col s12">
                <textarea placeholder="Ingrese Descripción de la Unidad de Medida" name="DESCRIPCIONUNIDADMEDIDA" class="materialize-textarea"></textarea>
                <label for="DESCRIPCIONUNIDADMEDIDA">Descripción de la Unidad de Medida</label>
              </div>
            </div>
            <button type="submit" class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">check</i>Guardar</button>
            <a class="waves-effect waves-light blue darken-4 btn" href="{{url('/medidas')}}"><i class="material-icons left">cancel</i>Cancelar</a>
          </form>
        </div>
      </div>
    </div>


@endsection
