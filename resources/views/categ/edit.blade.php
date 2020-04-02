@extends('plantilla')

@section('title', 'Editar Categoria')

@section('contenido')

<a href="{{ route('categorias.show',$categorias->idcate) }}" class="btn btn-primary">Atras</a>

{!! Form::model($categorias,['route'=>['categorias.update', $categorias], 'method'=>'PUT'])!!}

 @include('categ.formcate')

 {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}

	
@endsection

