@extends('layouts.app')

@section('title', 'Editar sucursal')

@section('content')
<br>
<a href="/sucursal" class="btn btn-primary">Atras</a>

<br>

{!! Form::model($sucursal,['route'=>['sucursal.update', $sucursal], 'method'=>'PUT', 'files'=>true])!!}

 @include('sucursal.formsuc')

 {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}