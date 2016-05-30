@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Eliminar Post</div>

                <div class="panel-body">

                {!! Form::model($post, ['route' => ['admin.post.destroy', $post->codigo], 'method' => 'DELETE']) !!}

                <h2>¿Esta seguro de eliminar el Post: <i>{{ $post->titulo }}</i>?</h2>

                <input type="submit" value="Eliminar Post" class="btn btn-danger"/>

                {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
