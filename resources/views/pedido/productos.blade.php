@extends('plantilla')
@section('title', 'Producto')
@section('contenido')
	<div class="d-flex justify-content-between">
		<div style="flex-wrap: wrap;" class="d-flex">
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
		<div style="background-color: white" class="rounded shadow">
			<h2 class="text-center">Pedido</h2>
			<div id="pedido-container" style="padding: 15px">
				<h5 class="text-center">{{ Auth::user()->name }}</h5>
				<div id="pedido-container">
					<ul class="list-group">
					</ul>
				</div>
				<br>
			</div>
			@csrf
			<div id="confirmacion-pedido"></div>
			<div class="d-flex justify-content-center">
				<a class="d-none" id="solicitar-productos" onclick="updatePedido('send')" role="button">Solicitar productos</a>
			</div>
		</div>
	</div>
@endsection

@section('javascript')
	<script>
		var csrft = "{!! csrf_token() !!}";
		var uid = {!! auth()->id() !!};
		var requestProductsButton = document.getElementById("solicitar-productos");
		var pedidoContainer = document.querySelector("#pedido-container ul");
		var confirmacion = document.getElementById("confirmacion-pedido");
		function addProduct(id, cantidad, codigo, nombre) {
			if (cantidad > 0) {
				let producto = document.createElement("li");
				producto.className = "d-inline-flex justify-content-between align-items-center border rounded";
				producto.innerHTML = `<span class="badge badge-primary badge-pill" style="margin: 10px">${cantidad}</span>
									<p style="white-space: nowrap; margin-top: 10px"> ${codigo} | ${nombre} </p>
									<button type="button" class="btn btn-warning producto-pedido" title="${id}" value="${cantidad}" onclick="deleteProducto(this.parentNode)" style="margin: 10px">
										<span class="fa fa-trash"></span>
									</button>`;
				pedidoContainer.appendChild(producto);
				updatePedido();
			}
		}
		function deleteProducto(item) {
			item.remove();
			updatePedido();
		}
		function updatePedido(task) {
			let productsArray = [];
			for (let p of document.getElementsByClassName("producto-pedido")) {
				let product = {
					id: p.title,
					cantidad: p.value
				}
				productsArray.push(product);
			}
			if (productsArray.length > 0) {
				requestProductsButton.disabled = false;
				requestProductsButton.className = "btn btn-success";
			} else{
				requestProductsButton.disabled = true;
				requestProductsButton.className = "d-none";
			}
			if (task === "send") {
				let d = new Date();
				let pedido = {
					userId: uid,
					products: productsArray,
					date: d.getFullYear()+"-"+d.getMonth()+"-"+d.getDate()
				};
				fetch("pedido", {
					headers: {
						"Content-Type": "application/json",
						"Accept": "application/json, text-plain, */*",
						"X-Requested-With": "XMLHttpRequest",
						"X-CSRF-TOKEN": csrft
					},
					method: 'post',
					credentials: "same-origin",
					body: JSON.stringify(pedido)
				}).then((response) => {
					console.log(response.statusText);
					confirmacion.innerHTML=`<div class="alert alert-success alert-dismissible fade show" role="alert">
												<strong>¡Pedido creado!</strong>
												<br>
												No olvides pasar por el.
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>`;
					html2canvas(document.getElementById("pedido-container"), {
						scale: 3,
						backgroundColor: "#ffffff",
						allowTaint: true,
						useCORS: true
					}).then((canvas)=>{
						requestProductsButton.onclick = "";
						requestProductsButton.setAttribute('download', 'Ticket.png');
						requestProductsButton.setAttribute('href', canvas.toDataURL("image/png").replace("image/png", "image/octet-stream"));
						requestProductsButton.innerHTML = "Descargar ticket";
					});
				}).catch(function(error) {
					console.log(error);
				});
			}
		}

	</script>
@endsection

