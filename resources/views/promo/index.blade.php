@extends('plantilla')

@section('title', 'promocion')

@section('contenido')
<br>
<a href="/home" class="btn btn-primary">Atras</a>

<br>

<div class="text-center">
<a href="/principal/create" class="btn btn-primary">Nueva Promocion</a>
</div>
<br>
<br>

@foreach($promocion as $promocion)

<div class="card">
  <div class="card-header">
   <h1> {{$promocion->ptema}}</h1>
   <p class="card-text">{{$promocion->pfecha}}</p>
  </div>
  <div class="card-body">
    <h3 class="card-title">Costo ${{$promocion->pcosto}}</h3>
    <p class="card-text">{{$promocion->pdet}}</p>
    <p class="card-text">{{$promocion->psesion}}</p>
    <a href="/principal/{{$promocion->ptema}}/edit" class="btn btn-primary">Editar</a>
  </div>
</div>

@endforeach

@endsection