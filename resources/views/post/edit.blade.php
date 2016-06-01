@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Post</div>

                <div class="panel-body">

                @include('post.partial.validation')

                {!! Form::model($post, ['route' => ['admin.post.update', $post->codigo], 'method' => 'PUT', 'files' => true]) !!}

                @include('post.partial.form')

                <input type="submit" value="Editar Post" class="btn btn-warning"/>

                {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
