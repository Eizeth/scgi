@extends('plantilla')

@section('title', 'Usuarios')

@section('contenido')
<br>
<a href="/home" class="btn btn-primary">Atras</a>

<br>

<div class="text-center">
<a href="/user/create" class="btn btn-primary">Nuevo Usuario</a>
</div>
<br>
<br>

@foreach($user as $user)

<div class="card">
  <div class="card-header">
   <h1> {{$user->name}}</h1>
  </div>
  <div class="card-body">
    <h3 class="card-title">Correo: {{$user->email}}</h3>
    <a href="/user/{{$user->name}}/edit" class="btn btn-primary">Editar</a>
    {!!Form::open(['route'=>['user.destroy',$user->id], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
			{!!Form::close()!!}
  </div>
</div>

@endforeach
@endsection


