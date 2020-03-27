@extends('plantilla')
 
@section('title', 'alta promocion')

@section('contenido')


{!! Form::open(['route' => 'principal.store', 'method'=>'POST','files'=>true]) !!}


    
    @include('promo.form')



        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
        
        {!! Form::close() !!}
@endsection
