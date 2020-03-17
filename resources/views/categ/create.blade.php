@extends('layouts.app')

@section('title', 'alta Categorias')

@section('content')

<br>
<a href="/categorias" class="btn btn-primary">Atras</a>
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