@extends('layouts.app')

@section('title', 'alta producto')

@section('content')
<br>
<a href="/producto" class="btn btn-primary">Atras</a>

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