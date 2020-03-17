@extends('layouts.app')

@section('title', 'Editar producto')

@section('content')


<br>
<a href="/producto" class="btn btn-primary">Atras</a>

<br>

{!! Form::model($producto,['route'=>['producto.update', $producto], 'method'=>'PUT', 'files'=>true])!!}

 @include('altas.formprod')

 {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}

@endsection