@extends('plantilla')

@section('title', 'Editar sucursal')

@section('contenido')


<br>
<a href="{{ route('sucursal.show',$sucursal->idsuc) }}" class="btn btn-primary">Atras</a>

<br>

{!! Form::model($sucursal,['route'=>['sucursal.update', $sucursal], 'method'=>'PUT', 'files'=>true])!!}

 @include('sucursal.formsuc')

 {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}


@endsection