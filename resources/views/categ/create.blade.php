@extends('plantilla')

@section('title', 'alta Categorias')

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


{!! Form::open(['route' => 'categorias.store', 'method'=>'POST'])!!}


    @include('categ.formcate')


        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
        
{!! Form::close() !!}


@endsection