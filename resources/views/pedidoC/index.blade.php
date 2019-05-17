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
      <li><a href="{{ route('pedidoC.index') }}">Pedido</a></li>      
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
          <h2 class="header">Pedido</h2>
          <div class="col s9">
            <a class="waves-effect waves-light blue darken-4 btn" href="{{route('pedidoC.create')}}"><i class="material-icons left">add</i>Añadir Registro</a>            
            <a class="waves-effect waves-light blue darken-4 btn" href="{{ route('pedidoC.index') }}"><i class="material-icons left">refresh</i>Actualizar Tabla</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">file_download</i>Exportar</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">print</i>Imprimir</a>
          </div>
          <div class="col s3">
            <!--<div class="input-field">
              <input type="text" id="search" >                                          
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>                            
            </div>-->
          </div>          
          <br><br>          
          <br>   
          <div>       
                <table id="myTable" class="table table-bordred table-striped">
                  <thead>
                    <tr>
                      <th colspan="7" class="white-text blue darken-3"><center>Empresa</center></th>
                    </tr>
                      <tr class="white-text blue darken-2">
                        <th colspan='2'><center>Acciones</center></th>
                        <th><center>Código del Pedido</center></th>
                        <th><center>Código de la Sucursal</center></th>
                        <th><center>Código del Cliente</center></th>
                      </tr>                        
                      </thead>  
                      <tbody>
                          @if($pedidoT->count())  
                          @foreach($pedidoT as $dato)  
                          <tr>  
                            <center>   
                              <td>
                                <a href="{{action('PedidoController@edit', $dato->numpedido)}}"><i class="material-icons left">edit</i></a>                      
                              </td>
                                <td>
                                  <form action="{{action('PedidoController@destroy', $dato->numpedido)}}" method="post">
                                      @csrf
                                      <input name="_method" type="hidden" value="DELETE">
                                      <button class="btn-default btn-flat" type="submit"><i class="material-icons left" onclick="return confirm('¿Está seguro que desea eliminar?')">delete</i></button>                          
                                  </form>                                                                   
                                </td>              
                              </center>              
                            <td><center>{{$dato['numpedido']}}</center></td>
                            <td><center>{{$dato['codigosucursal']}}</center></td>
                            <td><center>{{$dato['codigocliente']}}</center></td>
                          </tr>
                          @endforeach 
                          @else
                          <tr>
                              <td colspan="8">No hay registro !!</td>
                          </tr>
                          @endif
                      </tbody> 
                      <tfoot>
                      <tr class="white-text blue darken-2">
                        <td colspan="7">
                            <div class="pagination white-text">{{ $pedidoT->links() }}</div>
                        </td>
                      </tr>
                      </tfoot>        
              </table> 
          </div>                          
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
          <script src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
          <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
          <link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
          <script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>
          <script>          
            $(document).ready(function(){                                     

                  $('#myTable').DataTable({
                  "paging": false,                  
                  "info": true,
                  "autoWidth": true,
                  "searching": true, // Search box and search function will be actived
                  "dom": '<"top"f>rt<"bottom"ilp><"clear">',
                  "language": {
                  "zeroRecords": "No existe registros",
                  "infoEmpty": "No se econtró ningún registro",
                  "sSearch": "Buscar:   "
                      }
                  });
              });  
          </script> 
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
