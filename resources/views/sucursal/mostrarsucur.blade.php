@extends('layouts.app')

@section('title', 'promocion')

@section('content')
<br>
<a href="/home" class="btn btn-primary">Atras</a>

<br>

<div class="text-center">
<a href="/sucursal/create" class="btn btn-primary">Nueva Sucursal</a>
</div>
<br>
<br>
@foreach($sucursal as $sucursal)

<div class="card">
  <div class="card-header">
   <h1> {{$sucursal->snom}}</h1>
   
  </div>
  <div class="card-body">
    <p class="card-text">{{$sucursal->sdir}}</p>
    <a href="/principal/{{$sucursal->idsucur}}/edit" class="btn btn-primary">Editar</a>
  </div>
</div>

@endforeach

@endsection