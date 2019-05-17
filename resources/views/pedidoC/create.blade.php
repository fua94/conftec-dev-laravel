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

    <div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
          <form method="POST" action="/pedidoC">
          @csrf
            <h2 class="header">Módulo: Pedidos-Pedido</h2>
            <h3 class="header">Insertar Pedido</h3>
            <div class="col s12">
              <div class="select-field col s12">
              <div class="select-field col s12">
              <label for="codigosucursal">Código de Producto</label>
                  <select class="form-control" id="codigosucursal" name="codigosucursal" onchange="cambioSucursalT()">
                      @foreach ($sucursal as $sucursalR)
                      <option value="{{$sucursalR->codigosucursal}}">{{$sucursalR->codigosucursal}}</option>
                      @endforeach
                  </select>
              </div>                                 
              <div class="select-field col s12">
              <label for="codigocliente">Código de Cliente</label>
                  <select class="form-control" id="codigocliente" name="codigocliente" onchange="cambioClienteT()">
                      @foreach ($cliente as $clienteR)
                      <option value="{{$clienteR->codigocliente}}">{{$clienteR->codigocliente}}</option>
                      @endforeach
                  </select>                  
              </div>
            </div>
            <div class="row">
            <div class="col-md-5"></div>
            <button type="submit" class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">check</i>Ingresar</button>            
            <a class="waves-effect waves-light blue darken-4 btn" href="{{ route('pedidoC.index') }}"><i class="material-icons left">cancel</i>Cancelar</a>
          </form> 
        </div>
      </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>    
    <script src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){          
          cambioSucursalT();
          cambioClienteT();
      });
function cambioSucursalT(){
        var pedidosC;
        var sucursales;
        var $dPCombo = $("#codigosucursal");
        //$dPCombo.empty(); // remove old options
    <?php if(isset($pedidosC)){
		echo 'pedidosC = '.json_encode($pedidosC, JSON_HEX_TAG).';'; }?>
    <?php if(isset($sucursales)){
           echo 'sucursales = '.json_encode($sucursales, JSON_HEX_TAG).';'; }?>
        
        sucursales.forEach(function(sucursal){
        
       if(sucursal.codigosucursal==document.getElementById('codigosucursal').value){
        
        pedidosC.forEach(function(pedidoC){
            if(pedidoC.codigosucursal==sucursal.codigosucursal)
            {
                var option = $('<option></option>').attr("value", pedidosC.codigosucursal);
                $dPCombo.append(option);
            }
        })
       }
    })
    cambioClienteT();
}
function cambioClienteT(){
        var pedidosC;
        var clientes;
        var $dPCombo = $("#codigocliente");
        //$dPCombo.empty(); // remove old options
    <?php if(isset($pedidosC)){
		echo 'pedidosC = '.json_encode($pedidosC, JSON_HEX_TAG).';'; }?>
    <?php if(isset($clientes)){
           echo 'clientes = '.json_encode($clientes, JSON_HEX_TAG).';'; }?>
        
        clientes.forEach(function(cliente){
        
       if(cliente.codigocliente==document.getElementById('codigocliente').value){
        
        pedidosC.forEach(function(pedidoC){
            if(pedidoC.codigocliente==cliente.codigocliente)
            {
                var option = $('<option></option>').attr("value", pedidosC.codigocliente);
                $dPCombo.append(option);
            }
        })
       }
    })
}
      </script>
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