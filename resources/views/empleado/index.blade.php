@extends('plantilla')
@section('title', 'Encargado')
<@section('contenido')

    @foreach ($encargados as $encargados )
    <div class="card">
        <div class="card-header">
        <h3>{{$encargados->nom}}</h3>
        </div>
        <div class="card-body">
        <p class="card-text">{{$encargados->telefono}}</p>
          
      <a href="{{ route('encargados.show',$encargados->idencargado) }}" class="btn btn-primary">Ver mas</a>
        </div>
  </div>
    
    @endforeach
@endsection