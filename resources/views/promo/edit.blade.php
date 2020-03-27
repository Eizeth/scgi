@extends('plantilla')

@section('title', 'Editar promocion')

@section('contenido')

<br>
<a href="/principal" class="btn btn-primary">Atras</a>
<br>

{!! Form::model($promocion,['route'=>['principal.update', $promocion], 'method'=>'PUT'])!!}

 @include('promo.form')

 {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}

@endsection

