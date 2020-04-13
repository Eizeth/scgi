@extends('plantilla')

@section('title', 'Categorias')

@section('contenido')
<a href="{{ route('categorias.index') }}" class="btn btn-primary">Volver</a>

@if(session('status'))
	<div class="alert alert-success">
		{{ session('status')}}
	</div>
@endif

<div class="text-center">
	
	<p>{{$categorias->idcate}}</p>
	<h1>{{$categorias->catenom}}</h1>
	
	<a href="{{ route('categorias.edit',$categorias->idcate) }}" class="btn btn-primary">Editar</a>

	<form action="{{ route('categorias.destroy',$categorias->idcate) }}" method="POST">
		@csrf
		@method('DELETE')
		<button type="submit" class="btn btn-danger">Eliminar</button>
	</form>
	
		</div>	


@endsection