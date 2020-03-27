@extends('plantilla')

@section('title', 'Editar producto')

@section('contenido')
br>
   @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>       
            @endforeach 
            </ul>
         </div>        
    @endif


<br>
<a href="{{ route('producto.show',$producto->idprod) }}" class="btn btn-primary">Atras</a>

<br>

{!! Form::model($producto,['route'=>['producto.update', $producto], 'method'=>'PUT', 'files'=>true])!!}

 @include('altas.formprod')

 {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}

@endsection