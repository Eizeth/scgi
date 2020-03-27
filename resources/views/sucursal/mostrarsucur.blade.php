@extends('plantilla')

@section('title', 'promocion')

@section('contenido')


@foreach($sucursal as $sucursal)

<div class="card">
  <div class="card-header">
   <h1> {{$sucursal->snom}}</h1>
   
  </div>
  <div class="card-body">
    <p class="card-text">{{$sucursal->sdir}}</p>

    <a href="{{ route('sucursal.show',$sucursal->idsuc) }}" class="btn btn-primary">Ver mas</a>

  </div>
</div>

@endforeach

@endsection