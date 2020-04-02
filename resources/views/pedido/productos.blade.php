@extends('plantilla')
@section('title', 'Producto')
@section('contenido')
	<div class="d-flex justify-content-between">
		<div class="row">
			@foreach($productos as $producto)
				<div class="col-sm">
					<div class="card text-center" style="width: 18rem; margin-top:60px ">
							<img style="height: 100px; width: 100px; margin: 25px" class="card-img-top mx-auto d-blck"  src="{{asset('images/'.$producto->imagen)}}" alt="">
							<div class="card-body">
							<h5 class="card-title">{{$producto->codigo}}</h5>
							<p class="card-text">{{$producto->nom}}</p>
							<div class="input-group mb-3">
								<input type="number" min="1" class="form-control border-success" placeholder="Cantidad">
								<div class="input-group-append">
									<button class="btn btn-success" onclick="addProduct({{$producto->idprod}},this.parentNode.previousSibling.previousElementSibling.value,'{{$producto->codigo}}','{{$producto->nom}}')" type="button">Agregar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		<div class="w-25 p-3 card rounded">
			<h2 class="text-center">Pedido</h1>
			<div id="pedido-container">
				<ul class="list-group">
				</ul>
			</div>
			<br><br><br>
			<div class="d-flex justify-content-center">
				<button type="button" class="btn btn-outline-success" disabled>Solicitar productos</button>
			</div>
		</div>
	</div>
@endsection

@section('javascript')
	<script>
		var userId = {!! auth()->id() !!};
		var pedidoContainer = document.querySelector("#pedido-container ul");
		// var pedido = {};

		function addProduct(id, cantidad, codigo, nombre) {
			if (cantidad > 0) {
				let producto = document.createElement("li");
				producto.className = "list-group-item d-flex justify-content-between align-items-center";
				producto.innerHTML = `<span class="badge badge-primary badge-pill">${cantidad}</span>
									${codigo} | ${nombre}
									<button type="button" class="btn btn-warning" onclick="deleteProducto(this.parentNode)">
										<span class="fa fa-trash"></span>
									</button>`;
				pedidoContainer.appendChild(producto);
			}
		}

		function deleteProducto(item) {
			console.dir(item);
			item.remove();
		}
	</script>
@endsection