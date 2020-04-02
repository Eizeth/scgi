@extends('plantilla')

@section('title', 'Categoria')

@section('contenido')

			@foreach($categorias as $categorias)

					<div class="card">
				 	 	<div class="card-body">
				    	<h5 class="card-title">{{$categorias->catenom}}</h5>
				    	<br>	
						<a href="{{ route('categorias.show',$categorias->idcate) }}" class="btn btn-primary">Ver mas</a>
				 		 </div>
					</div>
				
			@endforeach
	
@endsection