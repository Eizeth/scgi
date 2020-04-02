@extends('plantilla')

@section('title', 'promocion')

@section('contenido')


@foreach($promocion as $promocion)

<div class="card">
  <div class="card-header">
   <h1> {{$promocion->ptema}}</h1>
   
  </div>
  <div class="card-body">
    <p class="card-text">{{$promocion->pfecha}}</p>

    <a href="{{ route('principal.show',$promocion->idpromo) }}" class="btn btn-primary">Ver mas</a>

  </div>
</div>

@endforeach

@endsection