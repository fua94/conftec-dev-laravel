@extends('layout.home')

@section('content')
<nav>
      <div class="nav-wrapper blue darken-3">
        <a href="/" class="brand-logo">ConfTec</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Configuraciones<i class="material-icons right">arrow_drop_down</i></a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Inventarios<i class="material-icons right">arrow_drop_down</i></a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown3">Pedidos<i class="material-icons right">arrow_drop_down</i></a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown4">Producción<i class="material-icons right">arrow_drop_down</i></a></li>
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown5">Despacho<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </nav>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">Empresa</a></li>
      <li class="divider"></li>
      <li><a href="#!">Sucursal</a></li>
      <li class="divider"></li>
      <li><a href="#!">Departamento</a></li>
      <li class="divider"></li>
      <li><a href="#!">Cargo</a></li>
      <li class="divider"></li>
      <li><a href="#!">Empleado</a></li>
      <li class="divider"></li>
      <li><a href="#!">Tipo de Producto</a></li>
      <li class="divider"></li>
      <li><a href="#!">Provincia</a></li>
      <li class="divider"></li>
      <li><a href="#!">Ciudad</a></li>
      <li class="divider"></li>
      <li><a href="#!">Usuario</a></li>
      <li class="divider"></li>
      <li><a href="#!">Unidad de Medida</a></li>
      <li class="divider"></li>
      <li><a href="#!">Unidad de Medida Alternativa</a></li>
      <li class="divider"></li>
      <li><a href="#!">Calendario</a></li>
      <li class="divider"></li>
      <li><a href="#!">Tipo de Descuento</a></li>
      <li class="divider"></li>
      <li><a href="#!">Descuento Programado</a></li>
      <li class="divider"></li>
      <li><a href="#!">Banco</a></li>
      <li class="divider"></li>
      <li><a href="#!">Bancos de la Empresa</a></li>
    </ul>

    <!-- Dropdown Structure -->
    <ul id="dropdown2" class="dropdown-content">
      <li><a href="#!">Materia Prima</a></li>
      <li class="divider"></li>
      <li><a href="#!">Bodega</a></li>
      <li class="divider"></li>
      <li><a href="#!">Materia Prima por Bodega</a></li>
      <li class="divider"></li>
      <li><a href="#!">Producto Terminado por Bodega</a></li>
      <li class="divider"></li>
      <li><a href="#!">Movimiento de Materia Prima</a></li>
      <li class="divider"></li>
      <li><a href="#!">Movimiento de Producto Terminado</a></li>
      <li class="divider"></li>
      <li><a href="#!">Orden de Compra</a></li>
      <li class="divider"></li>
      <li><a href="#!">Detalle de Orden de Compra</a></li>
      <li class="divider"></li>
      <li><a href="#!">Proveedor</a></li>
      <li class="divider"></li>
      <li><a href="#!">Producto por Proveedor</a></li>
      <li class="divider"></li>
    </ul>

    <!-- Dropdown Structure -->
    <ul id="dropdown3" class="dropdown-content">
      <li><a href="#!">Cliente</a></li>
      <li class="divider"></li>
      <li><a href="#!">Pedido</a></li>
      <li class="divider"></li>
      <li><a href="{{ route('detallePedido.index') }}">Detalle del Pedido</a></li>
      <li class="divider"></li>
    </ul>

    <!-- Dropdown Structure -->
    <ul id="dropdown4" class="dropdown-content">
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
    </ul>

    <!-- Dropdown Structure -->
    <ul id="dropdown5" class="dropdown-content">
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
    </ul>

    <!-- Mobile Menu -->
    <ul class="sidenav" id="mobile-demo">
      <li><a href="sass.html">Configuraciones</a></li>
      <li><a href="badges.html">Inventarios</a></li>
      <li><a href="collapsible.html">Pedidos</a></li>
      <li><a href="badges.html">Producción</a></li>
      <li><a href="collapsible.html">Despacho</a></li>
    </ul>

    <div id="test1" class="col s12">
      <div class="container section">
        <div class="row">
          <h2 class="header">Detalles Pedidos</h2>
          <div class="col s9">
            <a class="waves-effect waves-light blue darken-4 btn" href="{{route('detallePedido.create')}}"><i class="material-icons left">add</i>Añadir Registro</a>            
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">refresh</i>Actualizar Tabla</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">file_download</i>Exportar</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">print</i>Imprimir</a>
          </div>
          <div class="col s3">
            <div class="input-field">
              <input id="search" type="search" required>
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </div>
          
          
          <br><br>          
          <br>
          <table>
            <tr>
              <th colspan="7" class="white-text blue darken-3"><center>Empresa</center></th>
            </tr>
            <tr class="white-text blue darken-2">         
              <td colspan='2'><center>Acciones</center></td>
              <td><center>Código de la Pedido</center></td>
              <td><center>Código de la Producto</center></td>
              <td><center>Total de Unidades del Pedido</center></td>
              <td><center>Denominación de la Talla</center></td>
              <td><center>Talla</center></td>
            </tr>
            <tr>
            @foreach($detalle_pedido as $dato)              
                <center>                                
                    <td>
                      <a href="{{action('Detalle_PedidoController@edit', $dato->numpedido)}}"><i class="material-icons left">edit</i></a>
                    </td>
                    <td>
                      <form action="{{action('Detalle_PedidoController@destroy', $dato->numpedido)}}" method="post">
                          @csrf
                          <input name="_method" type="hidden" value="DELETE">
                          <button class="btn-default btn-flat" type="submit"><i class="material-icons left">delete</i></button>
                      </form>                                                                   
                    </td>              
                </center>              
              <td><center>{{$dato['numpedido']}}</center></td>
              <td><center>{{$dato['codigoproductot']}}</center></td>
              <td><center>{{$dato['totalunidadespedido']}}</center></td>
              <td><center>{{$dato['denominaciontalla']}}</center></td>
              <td><center>{{$dato['talla']}}</center></td>
            </tr>
            @endforeach 
          </table>
        </div>
      </div>
    </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <footer class="page-footer blue darken-1">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright blue darken-3">
        <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>
@endsection