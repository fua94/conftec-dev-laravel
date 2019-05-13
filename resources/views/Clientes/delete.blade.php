@extends('layout.home')

@section('title', 'Eliminar Cliente')

@section('content')
<div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
            <div class="col s6">
                <form action="{{ route('clientes.destroy', $cliente)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <h3 for="CODIGOCLIENTE">¿Está seguro de eliminar el cliente {{$cliente}}?</h3>
                    <br/>
                    <button type="submit" class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">check</i>Aceptar</button>
                    <a class="waves-effect waves-light blue darken-4 btn" href="{{url('/clientes')}}"><i class="material-icons left">cancel</i>Cancelar</a>
                </form>
            </div>
        </div>
      </div>
    </div>


@endsection
