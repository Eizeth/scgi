@extends('plantilla')

@section('title', 'Usuarios')

@section('contenido')

{!! Form::open(['route' => 'user.store', 'method'=>'POST']) !!}
    
    @include('usuarios.formuser')


        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
        
{!! Form::close() !!}
@endsection

