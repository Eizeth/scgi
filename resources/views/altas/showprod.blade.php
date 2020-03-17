@extends('layouts.app')

@section('title', 'Producto')

@section('content')
<a href="/producto" class="btn btn-primary">Volver</a>

@if(session('status'))
	<div class="alert alert-success">
		{{ session('status')}}
	</div>
@endif

<div class="text-center">
			<img style="height: 200px; width: 400px; margin: 25px" class="card-img-top mx-auto d-blck"  src="/images/{{$producto->imagen}}" alt="">
				<h1>{{$producto->nom}}</h1>
				<p>{{$producto->formula}}</p>
				<h2>{{$producto->stock}}</h2>
				<h1>{{$producto->slug}}</h1>

			<a href="/producto/{{$producto->slug}}/edit" class="btn btn-primary">Editar</a>

			{!!Form::open(['route'=>['producto.destroy',$producto->slug], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
			{!!Form::close()!!}
		</div>	


@endsection