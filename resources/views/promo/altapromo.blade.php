@extends('plantilla')
 
@section('title', 'alta promocion')

@section('contenido')
<!--clase de bootstrap-->

<br>
<a href="/home" class="btn btn-primary">Atras</a>

<br>


{!! Form::open(['route' => 'principal.store', 'method'=>'POST','files'=>true]) !!}


    
    @include('promo.form')



        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
        
        {!! Form::close() !!}
@endsection
