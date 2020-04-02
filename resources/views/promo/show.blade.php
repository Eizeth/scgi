@extends('plantilla')

@section('title', 'Promocion')

@section('contenido')
<a href="{{ route('principal.index') }}" class="btn btn-primary">Volver</a>

@if(session('status'))
	<div class="alert alert-success">
		{{ session('status')}}
	</div>
@endif
<div class="text-center">
	<h1>{{$promocion->ptema}}</h1>
	<p>{{$promocion->pcosto}}</p>
	<h2>{{$promocion->pfecha}}</h2>
	<p>{{$promocion->pnsesion}}</p>
	<p>{{$promocion->pdetalles}}</p>

	@if (Auth::user()->roleid == 1)
		<a href="{{ route('principal.edit',$promocion->idpromo) }}" class="btn btn-primary">Editar</a>
		<form action="{{ route('principal.destroy',$promocion->idpromo) }}" method="POST">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn btn-danger">Eliminar</button>
		</form>
	@endif
</div>


@endsection