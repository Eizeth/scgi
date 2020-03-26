@extends('plantilla')

@section('contenido')


<div class="container">

    REPORTES
    <br>
  <li class="nav-item">
    <a class="nav-link active" href="#">Prductos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Promociones</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Orden</a>
  </li>
  
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contenido</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="row">
                    <a class="nav-link active" href="{{ route('producto.index') }}">Productos</a>
                    <a class="nav-link active" href="{{ route('sucursal.index') }}">Sucursal</a>
                    <a class="nav-link active" href="{{ route('principal.index') }}">Promocion</a>
                    {{-- <a class="nav-link active" href="{{ route('orden.index') }}">Orden</a> --}}
                    <a class="nav-link active" href="{{ route('user.index') }}">Usuarios</a>
                      </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
