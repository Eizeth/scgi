@extends('plantilla')
 
@section('title', 'alta promocion')

@section('contenido')
<<<<<<< HEAD

<br>
<a href="/home" class="btn btn-primary">Atras</a>

<br>
=======
>>>>>>> 10df75853d46945a99d4100608fef994934b0615

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>       
            @endforeach 
            </ul>
         </div>        
    @endif
{!! Form::open(['route' => 'principal.store', 'method'=>'POST','files'=>true]) !!}
    
    @include('promo.form')



        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
        
        {!! Form::close() !!}
@endsection
