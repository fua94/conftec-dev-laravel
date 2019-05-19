@extends('layout.home')

@section('title', 'Editar Unidad de Medida')

@section('content')
<div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
          <form method="POST" action="/medidas/{{$medida->CODIGOUNIDADMEDIDA}}">
            @csrf
            @method('PUT')
            <h2 class="header">Editar Unidad de Medida</h2>
            <div class="col s12">
                <div class="input-field col s12">
                    <input name="CODIGOUNIDADMEDIDA" type="text" class="validate"
                    value="{{$medida->CODIGOUNIDADMEDIDA}}" disabled>
                    <label for="CODIGOUNIDADMEDIDA">Código de la Unidad de Medida *</label>
                </div>
                <div class="input-field col s12">
                    <select name="CODIGOEMPRESA">
                        <option value="" disabled>Seleccione empresa</option>
                        <option value="{{$medida['EMPRESA']->CODIGOEMPRESA}}" selected>{{$medida['EMPRESA']->CODIGOEMPRESA}}</option>
                            @foreach ($empresas as $empresa)
                                @if ($medida['EMPRESA']->CODIGOEMPRESA !== $empresa->CODIGOEMPRESA)
                                    <option value="{{$empresa->CODIGOEMPRESA}}">{{$empresa->CODIGOEMPRESA}}</option>
                                @endif
                            @endforeach
                    </select>
                    <label for="CODIGOEMPRESA">Código de la Empresa *</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Ingrese Nombre de la Unidad de Medida" name="NOMBREUNIDADMEDIDA" type="text" class="validate"
                    value="{{$medida->NOMBREUNIDADMEDIDA}}">
                    <label for="NOMBREUNIDADMEDIDA">Nombre de la Unidad de Medida</label>
                </div>
                <div class="input-field col s12">
                    <textarea placeholder="Ingrese Descripción de la Unidad de Medida" name="DESCRIPCIONUNIDADMEDIDA"
                    class="materialize-textarea">{{$medida->DESCRIPCIONUNIDADMEDIDA}}</textarea>
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
