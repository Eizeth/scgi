 
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
            <!--
                <select id="cate" name="tipo" onchange="elegir_opcion(this);">
            <option value="">Elija la categoria</option>
            <option value="op1">Tonico</option>
            <option value="op2">Polvo</option>
            <option value="op3">Comprimido</option>
            </select>-->
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

     