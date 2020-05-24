@extends('plantilla')
 
@section('title', 'alta promocion')

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
{!! Form::open(['route' => 'principal.store', 'method'=>'POST','files'=>true]) !!}
    
    @include('promo.form')

        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
        
 {!! Form::close() !!}
@endsection
