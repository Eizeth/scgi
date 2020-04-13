@extends('plantilla')
@section('title', 'Producto')
@section('contenido')
	<div class="row">
		<table border="1" id="products-table" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Producto</th>
					<th>Último movimiento</th>
					<th>Stock</th>
				</tr>
			</thead>
			<tbody>
				@foreach($productos as $producto)
					<tr>
						<td>{{$producto->nom}}</td>
						<td>{{$producto->updated_at}}</td>
						<td>{{$producto->stock}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection

@section('javascript')
	<script>
		$(document).ready(function() {
			$('#products-table').DataTable( {
				dom: 'Bfrtip',
				buttons: [{
					extend: "print",
					text: "Imprimir reporte",
					className: "btn btn-success"
				}]
			} );
		} );
	</script>
	document.get
@endsection