@extends('layouts.app')

@section('content')


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
 <a class="nav-link active" href="/producto">Productos</a>
 <a class="nav-link active" href="/sucursal">Sucursal</a>
 <a class="nav-link active" href="/principal">Promocion</a>
 <a class="nav-link active" href="/orden">Orden</a>
 <a class="nav-link active" href="/user">Usuarios</a>
  </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
