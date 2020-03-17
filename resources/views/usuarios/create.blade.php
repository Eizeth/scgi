@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')

{!! Form::open(['route' => 'user.store', 'method'=>'POST']) !!}


    
    @include('usuarios.formuser')



        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
        
        {!! Form::close() !!}
@endsection

