@extends('plantilla')
@section('title', 'Producto')
@section('contenido')
	<div class="d-flex justify-content-between">
		<div class="row">
			@foreach($pedidos as $pedido)
				<div class="col-sm">
					<div class="card text-center" style="width: 18rem; margin-top:60px ">
						<div class="card-body">
							<h5>{{$pedido->user->name}}</h5>
							<h3>{{$pedido->solicitado}}</h3>
							<ul class="list-group">
								@foreach($pedido->productos as $p)
									<li class="list-group-item d-flex justify-content-between align-items-center">
										{{$p->detail->codigo}} | {{$p->detail->nom}}
										<span class="badge badge-primary badge-pill" style="font-size:14pt">{{$p->cantidad}}</span>
									</li>
								@endforeach
							</ul>
							<br>
							<button class="btn btn-success" onclick="alert({{$pedido->idpedido}})" type="button">Entregar</button>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection

@section('javascript')
@endsection