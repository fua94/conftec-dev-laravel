@extends('layout.home')

@section('content')

    <div id="test1" class="col s12">
      <div class="container section">
        <div class="row">
          <h2 class="header">Ejemplo de Vista de Visualización</h2>
          <div class="col s9">
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">add</i>Añadir Registro</a>
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
          <table>
            <tr>
              <th colspan="7" class="white-text blue darken-3"><center>Empresa</center></th>
            </tr>
            <tr class="white-text blue darken-2">
              <td>
                <center>
                  <label>
                    <input type="checkbox" />
                    <span></span>
                  </label>Seleccionar
                </center>
              </td>
              <td><center>Acciones</center></td>
              <td><center>Código de la Empresa</center></td>
              <td><center>Nombre</center></td>
              <td><center>Sector</center></td>
              <td><center>País</center></td>
              <td><center>Categoría</center></td>
            </tr>
            
            <tr>
              <td>
                <center>
                  <label>
                    <input type="checkbox" />
                    <span></span>
                  </label>
                </center>
              </td>
              <td>
                <center>
                  <i class="material-icons left">pageview</i>
                  <i class="material-icons left">edit</i>
                  <i class="material-icons left">delete</i>
                  <i class="material-icons left">content_copy</i>
                </center>
              </td>
              <td><center>Ejemplo 1</center></td>
              <td><center>Ejemplo 1</center></td>
              <td><center>Ejemplo 1</center></td>
              <td><center>Ejemplo 1</center></td>
              <td><center>Ejemplo 1</center></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    

    <div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
          <form>
            <h2 class="header">Ejemplo de Vista de Inserción</h2>
            <h3 class="header">Empresa</h3>
            <div class="col s12">
              <div class="input-field col s12">
                <input placeholder="Código de la Empresa" id="first_name" type="text" class="validate">
                <label for="first_name">Código de la empresa *</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Código de la Empresa" id="first_name" type="text" class="validate">
                <label for="first_name">Nombre</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Código de la Empresa" id="first_name" type="text" class="validate">
                <label for="first_name">Sector</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Código de la Empresa" id="first_name" type="text" class="validate">
                <label for="first_name">País</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Código de la Empresa" id="first_name" type="text" class="validate">
                <label for="first_name">Categoría</label>
              </div>
            </div>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">check</i>Ingresar</a>
            <a class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">cancel</i>Cancelar</a>
          </form> 
        </div>
      </div>
    </div>

@endsection

    

