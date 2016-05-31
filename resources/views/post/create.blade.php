@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Agregar Post</div>

                <div class="panel-body">

                @include('post.partial.validation')

                {!! Form::open(['route' => 'admin.post.store', 'method' => 'POST', 'files' => true]) !!}

                @include('post.partial.form')

                <input type="submit" value="Registrar Post" class="btn btn-success"/>

                {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
