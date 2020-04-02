@extends('plantilla')

@section('title', 'Producto')

@section('contenido')
<a href="{{ route('producto.index') }}" class="btn btn-primary">Volver</a>

@if(session('status'))
	<div class="alert alert-success">
		{{ session('status')}}
	</div>
@endif

<div class="text-center">
	
	
		<img style="height: 100px; width: 100px; margin: 25px" class="card-img-top mx-auto d-blck"  src="{{asset('images/'.$producto->imagen)}}" alt="">
			
				<h1>{{$producto->nom}}</h1>
				<p>{{$producto->formula}}</p>
				<h2>Stock del producto: {{$producto->stock}}</h2>
				

			<a href="{{ route('producto.edit',$producto->idprod) }}" class="btn btn-primary">Editar</a>


			<form action="{{ route('producto.destroy',$producto->idprod) }}" method="POST">
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Eliminar</button>
			</form>
		</div>	


@endsection