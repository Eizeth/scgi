@extends('plantilla')

@section('title', 'Editar Usuario')

@section('contenido')

<br>
<a href="/user" class="btn btn-primary">Atras</a>
<br>

{!! Form::model($user,['route'=>['user.update', $user], 'method'=>'PUT'])!!}

 @include('usuarios.formuser')

 {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}

@endsection

