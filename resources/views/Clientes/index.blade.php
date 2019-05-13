@extends('layout.home')

@section('title', 'Módulo Clientes')

@section('content')
    <div id="test1" class="col s12">
      <div class="container section">
        <div class="row">
          <h2 class="header">Módulo - Pedidos-Cliente</h2>
          <div class="col s9">
            <a class="waves-effect waves-light blue darken-4 btn" href="{{url('clientes/create')}}"><i class="material-icons left">add</i>Añadir Registro</a>
            <a class="waves-effect waves-light blue darken-4 btn" href="{{url('clientes')}}"><i class="material-icons left">refresh</i>Actualizar Tabla</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">file_download</i>Exportar</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">print</i>Imprimir</a>
          </div>
          <div class="col s3">
          <form action="{{ route('clientes.find')}}" method="post">
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
              <th colspan="10" class="white-text blue darken-3"><center>Clientes</center></th>
            </tr>
            <tr class="white-text blue darken-2">

              <td colspan="2"><center>Acciones</center></td>
              <td><center>Código del Cliente</center></td>
              <td><center>Nombre del Cliente</center></td>
              <td><center>Dirección del Cliente</center></td>
              <td><center>Empresa del Cliente</center></td>
              <td><center>Tipo de Cliente</center></td>
              <td><center>Email del Cliente</center></td>
              <td><center>Teléfono del Cliente</center></td>
              <td><center>Ciudad del Cliente</center></td>
            </tr>
            @foreach ($clientes as $cliente)
              <tr>
                <td> <!--ACCIONES-->
                  <a href="{{url('clientes/'.$cliente->CODIGOCLIENTE)}}"><i class="material-icons left" >edit</i></a>
                </td>
                <td>
                  <a href="{{url('cliente?eliminar='.$cliente->CODIGOCLIENTE)}}"><i class="material-icons left" >delete</i></a>
                </td>
                <td><center>{{$cliente->CODIGOCLIENTE}}</center></td>
                <td><center>{{$cliente->NOMBRECLIENTE}}</center></td>
                <td><center>{{$cliente->DIRECCIONCLIENTE}}</center></td>
                <td><center>{{$cliente['EMPRESA']->NOMBREEMPRESA}}</center></td>
                @if ($cliente->TIPOCLIENTE === 'H')
                  <td><center>Habitual</center></td>
                @elseif ($cliente->TIPOCLIENTE === 'C')
                  <td><center>Casual</center></td>
                @endif
                <td><center>{{$cliente->EMAILCLIENTE}}</center></td>
                <td><center>{{$cliente->TELEFONOCLIENTE}}</center></td>
                <td><center>{{$cliente['CIUDAD']->NOMBRECIUDAD}}</center></td>

              </tr>
            @endforeach

          </table>
        </div>
      </div>
    </div>
@endsection
