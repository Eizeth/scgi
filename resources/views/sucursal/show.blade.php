@extends('plantilla')

@section('title', 'Sucursal')

@section('contenido')
<a href="{{ route('Sucursal.index') }}" class="btn btn-primary">Volver</a>

@if(session('status'))
	<div class="alert alert-success">
		{{ session('status')}}
	</div>
@endif

<div class="text-center">
			
				<h1>{{$Sucursal->snom}}</h1>
				<p>{{$Sucursal->sdir}}</p>
				<h2>{{$Sucursal->sencargado}}</h2>
				

			<a href="{{ route('Sucursal.edit',$Sucursal->idsuc) }}" class="btn btn-primary">Editar</a>


			<form action="{{ route('Sucursal.destroy',$Sucursal->idsuc) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Eliminar</button>
			</form>
		</div>	


@endsection