@extends('plantilla')

@section('title', 'Editar promocion')

@section('contenido')

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
<a href="{{ route('Principal.show',$promocion->idpromo) }}" class="btn btn-primary">Atras</a>

<br>

{!! Form::model($promocion,['route'=>['Principal.update', $promocion], 'method'=>'PUT', 'files'=>true])!!}

 @include('promo.form')

 {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}

@endsection

