@extends('plantilla')

@section('title', 'alta Categorias')

@section('contenido')

<br>


{!! Form::open(['route' => 'categorias.store', 'method'=>'POST'])!!}


    @include('categ.formcate')


        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
        
{!! Form::close() !!}


@endsection