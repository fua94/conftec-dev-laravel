@extends('layout.home')

@section('title', 'Módulo Configuraciones-Unidad de Medida')

@section('content')
    <div id="test1" class="col s12">
      <div class="container section">
        <div class="row">
          <h2 class="header">Módulo - Configuraciones-Unidad de Medida</h2>
          <div class="col s9">
            <a class="waves-effect waves-light blue darken-4 btn" href="{{url('medidas/create')}}"><i class="material-icons left">add</i>Añadir Registro</a>
            <a class="waves-effect waves-light blue darken-4 btn" href="{{url('medidas')}}"><i class="material-icons left">refresh</i>Actualizar Tabla</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">file_download</i>Exportar</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">print</i>Imprimir</a>
          </div>
          <div class="col s3">
          <form action="{{ route('medidas.find')}}" method="post">
                  @csrf
            <div class="input-field">
              <input id="search" name="SEARCH" type="search" required>
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
            </form>
          </div>
           <br><br>
          <table>
            <tr>
              <th colspan="6" class="white-text blue darken-3"><center>Unidades de Medidas</center></th>
            </tr>
            <tr class="white-text blue darken-2">

              <td colspan="2"><center>Acciones</center></td>
              <td><center>Código de la Unidad de Medida</center></td>
              <td><center>Empresa</center></td>
              <td><center>Nombre de la Unidad de Medida</center></td>
              <td><center>Descripción de la Unidad de Medida</center></td>
            </tr>
            @foreach ($medidas as $medida)
              <tr>
                <td> <!--ACCIONES-->
                  <a href="{{url('medidas/'.$medida->CODIGOUNIDADMEDIDA)}}"><i class="material-icons left" >edit</i></a>
                </td>
                <td>
                  <a href="{{url('medida?eliminar='.$medida->CODIGOUNIDADMEDIDA)}}"><i class="material-icons left" >delete</i></a>
                </td>
                <td><center>{{$medida->CODIGOUNIDADMEDIDA}}</center></td>
                <td><center>{{$medida['EMPRESA']->NOMBREEMPRESA}}</center></td>
                <td><center>{{$medida->NOMBREUNIDADMEDIDA}}</center></td>
                <td><center>{{$medida->DESCRIPCIONUNIDADMEDIDA}}</center></td>
              </tr>
            @endforeach

          </table>
        </div>
      </div>
    </div>
@endsection
