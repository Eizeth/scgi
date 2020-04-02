@extends('plantilla')

@section('title', 'Alta de Encargado')
@section('contenido')

{!! Form::open(['route' => 'encargados.store', 'method'=>'POST','files'=>true]) !!}
    
    @include('empleado.form')



        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
        
{!! Form::close() !!}
    
@endsection