@extends('plantilla')

@section('title', 'Editar encargados')

@section('contenido')
br>
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
<a href="{{ route('encargados.show',$encargados->idencargado) }}" class="btn btn-primary">Atras</a>

<br>

{!! Form::model($encargados,['route'=>['encargados.update', $encargados], 'method'=>'PUT', 'files'=>true])!!}

 @include('empleado.form')

 {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}

{!! Form::close() !!}

@endsection