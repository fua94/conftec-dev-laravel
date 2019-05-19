@extends('layout.home')

@section('title', 'Módulo Configuraciones-Tipo de Descuento')

@section('content')
    <div id="test1" class="col s12">
      <div class="container section">
        <div class="row">
          <h2 class="header">Módulo Configuraciones-Tipo de Descuento</h2>
          <div class="col s9">
            <a class="waves-effect waves-light blue darken-4 btn" href="{{url('descuentos/create')}}"><i class="material-icons left">add</i>Añadir Registro</a>
            <a class="waves-effect waves-light blue darken-4 btn" href="{{url('descuentos')}}"><i class="material-icons left">refresh</i>Actualizar Tabla</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">file_download</i>Exportar</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">print</i>Imprimir</a>
          </div>
          <div class="col s3">
          <form action="{{ route('descuentos.find') }}" method="post">
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
              <th colspan="6" class="white-text blue darken-3"><center>Tipos de Descuento</center></th>
            </tr>
            <tr class="white-text blue darken-2">

              <td colspan="2"><center>Acciones</center></td>
              <td><center>Código del Tipo de Descuento</center></td>
              <td><center>Empresa</center></td>
              <td><center>Descripción del Tipo de Descuento</center></td>
              <td><center>Porcentaje del Tipo de Descuento</center></td>
            </tr>
            @foreach ($descuentos as $tipoDescuento)
              <tr>
                <td> <!--ACCIONES-->
                  <a href="{{url('descuentos/'.$tipoDescuento->CODIGOTIPODESCUENTO)}}"><i class="material-icons left" >edit</i></a>
                </td>
                <td>
                  <a href="{{url('descuento?eliminar='.$tipoDescuento->CODIGOTIPODESCUENTO)}}"><i class="material-icons left" >delete</i></a>
                </td>
                <td><center>{{$tipoDescuento->CODIGOTIPODESCUENTO}}</center></td>
                <td><center>{{$tipoDescuento['EMPRESA']->NOMBREEMPRESA}}</center></td>
                <td><center>{{$tipoDescuento->DESCRIPCIONTIPODESC}}</center></td>
                <td><center>{{$tipoDescuento->PORCENTAJETIPODESC}}</center></td>
              </tr>
            @endforeach

          </table>
        </div>
      </div>
    </div>
@endsection
