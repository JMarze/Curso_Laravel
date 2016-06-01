@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de Posts</div>

                <div class="panel-body">
                    {!! link_to_route('admin.post.create', 'Agregar', array(), ['class' => 'btn btn-success']) !!}
                    <hr/>
                    <table class="table table-hover">
                        <tr class="table-header">
                            <th>Codigo</th>
                            <th>Título</th>
                            <th>Categoría</th>
                            <th>Fecha de creación</th>
                            <th>Última modificación</th>
                            <th>Publicado</th>
                            <th>Imagen</th>
                            <th></th>
                        </tr>

                        @foreach($posts as $item)
                        <tr class="table-body">
                            <td>{{ $item->codigo }}</td>
                            <td>{{ $item->titulo }}</td>
                            <td>{{ $item->categoria->nombre }}</td>
                            <td>{{ $item->created_at->diffForHumans() }}</td>
                            <td>{{ $item->updated_at->diffForHumans() }}</td>
                            <td>
                                @if($item->publicado)
                                SI
                                @else
                                NO
                                @endif
                            </td>
                            <td>
                                @if($item->imagen != null && $item->imagen != '')
                                <img src="{{ route('post.imagen', ['nombreImagen' => $item->imagen]) }}" alt="" width="100"/>
                                @else
                                Sin imagen
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                {!! link_to_route('admin.post.edit', 'Editar', array($item->codigo), ['class' => 'btn btn-warning']) !!}
                                {!! link_to_route('admin.post.show', 'Eliminar', array($item->codigo), ['class' => 'btn btn-danger']) !!}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                <div class="panel-footer text-center">
                    {{ $posts->render() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
