@extends('plantilla')

@section('title', 'Usuarios')

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

{!! Form::open(['route' => 'user.store', 'method'=>'POST']) !!}
    
    @include('usuarios.formuser')


        {!!Form::submit('Guardar',['class'=>'btn btn-primary'])!!}
        
{!! Form::close() !!}
@endsection

