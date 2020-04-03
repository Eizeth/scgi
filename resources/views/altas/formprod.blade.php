 
    <div class="form-group">
        {!!Form::label('codigo', 'Codigo')!!}
        {!!Form::text('codigo', null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('nom', 'Nombre')!!}
        {!!Form::text('nom', null,['class'=>'form-control'])!!}
    </div>
 
    <div class="form-group">
        {!!Form::label('cate', 'Categoria')!!}
        {!!Form::text('cate', null,['class'=>'form-control'])!!}

        <select id="cate" oninput="changeCategory(this.value)">
            <option value="">Elija la categoria</option>
            @foreach ($categorias as $c)
                <option value="{{$c->idcate}}" id="{{$c->idcate}}">{{$c->catenom}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {!!Form::label('neto', 'Cont.Neto')!!}
        {!!Form::text('neto', null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('cant', 'Cantidad')!!}
        {!!Form::text('cant', null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('stock', 'stock')!!}
        {!!Form::text('stock', null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('formula', 'Formula')!!}
        {!!Form::text('formula', null,['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::label('imagen', 'Imagen')!!}
        {!!Form::file('imagen')!!}
    </div>

<script>
    function changeCategory(idc) {
        alert(idc)
    }
</script>