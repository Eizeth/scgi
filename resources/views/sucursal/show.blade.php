@extends('plantilla')

@section('title', 'sucursal')

@section('contenido')
<a href="{{ route('sucursal.index') }}" class="btn btn-primary">Volver</a>

@if(session('status'))
	<div class="alert alert-success">
		{{ session('status')}}
	</div>
@endif

<div class="text-center">
			
				<h1>{{$sucursal->snom}}</h1>
				<p>{{$sucursal->sdir}}</p>
				<h2>{{$sucursal->sencar}}</h2>  
				<p>{{$sucursal->stel}}</p>

				<h2>{{$sucursal->sencargado}}</h2>

				

			<a href="{{ route('sucursal.edit',$sucursal->idsuc) }}" class="btn btn-primary">Editar</a>


			<form action="{{ route('sucursal.destroy',$sucursal->idsuc) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Eliminar</button>
			</form>
		</div>	


@endsection