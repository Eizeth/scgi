@extends('plantilla')

@section('title', 'Encargado de la sucursal')

@section('contenido')
<a href="{{ route('encargados.index') }}" class="btn btn-primary">Volver</a>

<div class="text-center">
				<h1>{{$encargados->nom}}</h1>
				<p>{{$encargados->app}}</p>
				<h2>{{$encargados->apm}}</h2>
				<h1>{{$encargados->telefono}}</h1>

			<a href="{{ route('encargados.edit',$encargados->idencargado) }}" class="btn btn-primary">Editar</a>

			<form action="{{ route('encargados.destroy',$encargados->idencargado) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Eliminar</button>
			</form>
		</div>	


@endsection