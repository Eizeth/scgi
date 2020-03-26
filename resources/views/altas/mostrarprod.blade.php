@extends('layouts.app')

@section('title', 'Producto')

@section('content')
<br>
<a href="{{ route('home') }}" class="btn btn-primary">Atras</a>

<br>
<div class="row">
<div class="text-center">
<a href="{{ route('producto.create') }}" class="btn btn-primary">Nuevo producto</a>
</div>
	<div class="row">
		@foreach($productos as $producto)


			<div class="col-sm">

				<div class="card text-center" style="width: 18rem; margin-top:60px ">
				<img style="height: 100px; width: 100px; margin: 25px" class="card-img-top mx-auto d-blck"  src="/images/{{$producto->imagen}}" alt="">
		 	 	<div class="card-body">
		    	<h5 class="card-title">{{$producto->codigo}}</h5>
		    <p class="card-text">{{$producto->formula}}</p>
		    <a href="{{ route('producto.show',$producto->idprod) }}" class="btn btn-primary">Ver mas</a>
		  </div>
		</div>
	</div>
		@endforeach
</div>

</div>

@endsection