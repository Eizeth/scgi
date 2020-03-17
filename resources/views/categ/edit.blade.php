@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')
<br>
<a href="/categorias" class="btn btn-primary">Atras</a>
<br>

{!! Form::model($categorias,['route'=>['categorias.update', $categorias], 'method'=>'PUT'])!!}

 @include('categ.formcate')

 {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}

	
@endsection

