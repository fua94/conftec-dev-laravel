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

    <div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
          <form>
            <h2 class="header">Módulo: Pedidos-Detalle del Pedido</h2>
            <h3 class="header">Insertar Pedidos-Detalle</h3>
            <div class="col s12">
              <div class="col-sm-6">
                  <select class="form-control" id="numpedido" name="numpedido" onchange="cambioPedido()">
                      @foreach ($pedidos as $pedidos)
                      <option value="{{$pedidos->numpedido}}">{{$pedidos->numpedido}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="col-sm-6">
                  <select class="form-control" id="codigoproductot" name="codigoproductot" onchange="cambioProductoT()">
                      @foreach ($productos as $productos)
                      <option value="{{$productos->codigoproductot}}">{{$productos->codigoproductot}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="input-field col s12">
                <input placeholder="Total de Unidades del Pedido" id="totUniPed" type="text" class="validate">
                <label for="first_name">Total de Unidades del Pedido</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Denominación de la Talla" id="denTall" type="text" class="validate">
                <label for="first_name">Denominación de la Talla</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Talla" id="talla" type="text" class="validate">
                <label for="first_name">Talla</label>
              </div>
            </div>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">check</i>Ingresar</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">cancel</i>Cancelar</a>
          </form> 
        </div>
      </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <script>
      $(document).ready(function(){
          cambioPedido();
          cambioProductoT();
      });

      function cambioPedido(){
        var detallesPedidos;
        var pedidos;
        var $dPCombo = $("#numpedido");
        $dPCombo.empty(); // remove old options
    <?php if(isset($detallesPedidos)){
		echo 'detallesPedidos = '.json_encode($detallesPedidos, JSON_HEX_TAG).';'; }?>
    <?php if(isset($pedidos)){
           echo 'pedidos = '.json_encode($pedidos, JSON_HEX_TAG).';'; }?>
        
        pedidos.forEach(function(pedido){
        
       if(pedido.numpedido==document.getElementById('numpedido').value){
        
        detallesPedidos.forEach(function(detallesPedido){
            if(detallesPedido.numpedido==pedido.numpedido)
            {
                var option = $('<option></option>').attr("value", detallesPedidos.numpedido);
                $dPCombo.append(option);
            }
        })
       }
    })
    cambioProductoT();
}
function cambioProductoT(){
        var detallesPedidos;
        var productosT;
        var $dPCombo = $("#codigoproductot");
        $dPCombo.empty(); // remove old options
    <?php if(isset($detallesPedidos)){
		echo 'detallesPedidos = '.json_encode($detallesPedidos, JSON_HEX_TAG).';'; }?>
    <?php if(isset($productosT)){
           echo 'productosT = '.json_encode($productosT, JSON_HEX_TAG).';'; }?>
        
        productosT.forEach(function(productoT){
        
       if(productoT.codigoproductot==document.getElementById('codigoproductot').value){
        
        detallesPedidos.forEach(function(detallesPedido){
            if(detallesPedido.codigoproductot==productoT.codigoproductot)
            {
                var option = $('<option></option>').attr("value", detallesPedidos.codigoproductot);
                $dPCombo.append(option);
            }
        })
       }
    })
    //  cambioProductoT();
}
function cambioDTalla(){
        var detallesPedidos;
        var productosT;
        var $dPCombo = $("#codigoproductot");
        $dPCombo.empty(); // remove old options
    <?php if(isset($detallesPedidos)){
		echo 'detallesPedidos = '.json_encode($detallesPedidos, JSON_HEX_TAG).';'; }?>
    <?php if(isset($productosT)){
           echo 'productosT = '.json_encode($productosT, JSON_HEX_TAG).';'; }?>
        
        productosT.forEach(function(productoT){
        
       if(productoT.codigoproductot==document.getElementById('codigoproductot').value){
        
        detallesPedidos.forEach(function(detallesPedido){
            if(detallesPedido.codigoproductot==productoT.codigoproductot)
            {
                var option = $('<option></option>').attr("value", detallesPedidos.codigoproductot);
                $dPCombo.append(option);
            }
        })
       }
    })
    //  cambioProductoT();
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