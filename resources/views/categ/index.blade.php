@extends('plantilla')

@section('title', 'Categoria')

@section('contenido')
<br>
<div class="text-center">
<a href="/categorias/create" class="btn btn-primary">Nuevo </a>
</div>
<br>
<a href="/home" class="btn btn-primary">Atras</a>
<br>
		<div class="row">
			@foreach($categoria as $categoria)
				<div class="col-sm">
					<div class="card text-center" style="width: 18rem; margin-top:60px ">
				 	 	<div class="card-body">
				    	<h5 class="card-title">{{$categoria->catenom}}</h5>
				    	<br>
				    		<a href="/categorias/{{$categoria->slug}}/edit" class="btn btn-primary">Editar</a>
								<br>
								<br>
			{!!Form::open(['route'=>['categorias.destroy',$categoria->slug], 'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
			{!!Form::close()!!}
				 		 </div>
					</div>
				</div>
			@endforeach
		</div>

@endsection