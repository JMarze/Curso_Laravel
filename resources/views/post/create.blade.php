@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Agregar Post</div>

                <div class="panel-body">

                @if(count($errors) > 0)
                <div class="validation-messages">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {!! Form::open(['route' => 'admin.post.store', 'method' => 'POST']) !!}

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
                    {!! Form::label('categoria_id', 'Categoría', []) !!}
                    {!! Form::select('categoria_id', $categorias, null, ['placeholder' => 'Seleccione una categoría...', 'class' => 'form-control']); !!}
                </div>

                <div class="form-group">
                    {!! Form::label('publicado', '¿Publicado?', []) !!}
                    {!! Form::checkbox('publicado', null, true) !!}
                </div>

                <input type="submit" value="Registrar Post" class="btn btn-success"/>

                {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
