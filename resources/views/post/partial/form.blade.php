<div class="form-group">
    {!! Form::label('codigo', 'Código', []) !!}
    {!! Form::text('codigo', null, ['placeholder' => 'Ej. XXX-123', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('titulo', 'Título', []) !!}
    {!! Form::text('titulo', null, ['placeholder' => 'Ej. Nuevo Post', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('contenido', 'Contenido', []) !!}
    {!! Form::textarea('contenido', null, ['placeholder' => 'Ej. Contenido extenso del post...', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('imagen', 'Imagen', []) !!}
    {!! Form::file('imagen', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('categoria_id', 'Categoría', []) !!}
    {!! Form::select('categoria_id', $categorias, null, ['placeholder' => 'Seleccione una categoría...', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tags', 'Tags', []) !!}
    {!! Form::select('tags[]', $tags, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::label('publicado', '¿Publicado?', []) !!}
    {!! Form::select('publicado', [true => 'SI', false => 'NO'], true, ['placeholder' => '¿Post publicado?', 'class' => 'form-control']) !!}
</div>
