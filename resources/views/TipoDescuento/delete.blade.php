@extends('layout.home')

@section('title', 'Eliminar Tipo de Descuento')

@section('content')
<div id="test2" class="col s12">
      <div class="container section">
        <div class="row">
            <div class="col s6">
                <form action="{{ route('descuentos.destroy', $descuento)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <h3 for="CODIGOTIPODESCUENTO">¿Está seguro de eliminar el tipo de descuento {{$descuento}}?</h3>
                    <br/>
                    <button type="submit" class="waves-effect waves-light blue darken-4 btn"><i class="material-icons left">check</i>Aceptar</button>
                    <a class="waves-effect waves-light blue darken-4 btn" href="{{url('/descuentos')}}"><i class="material-icons left">cancel</i>Cancelar</a>
                </form>
            </div>
        </div>
      </div>
    </div>


@endsection
