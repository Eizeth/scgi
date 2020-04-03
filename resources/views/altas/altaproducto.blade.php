@extends('plantilla')

@section('title', 'alta producto')

@section('contenido')

<br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif

{!! Form::open(['route' => 'producto.store', 'method'=>'POST','files'=>true]) !!}

    @include('altas.formprod')

        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
{!! Form::close() !!}

@endsection