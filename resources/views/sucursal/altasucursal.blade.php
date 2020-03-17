@extends('layouts.app')

@section('title', 'alta Sucursal')

@section('content')

<br>
<a href="/home" class="btn btn-primary">Atras</a>

<br>
<!--clase de bootstrap-->

   @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>       
            @endforeach 
            </ul>
         </div>        
    @endif

{!! Form::open(['route' => 'sucursal.store', 'method'=>'POST','files'=>true]) !!}
@include('sucursal.formsuc')

           {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
        
        {!! Form::close() !!}
@endsection 