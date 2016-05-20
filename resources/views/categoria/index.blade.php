@extends('template.main')
@section('title', 'Categorias')
@section('principal', 'Listado de Categorias')

@section('contenido')
<a href="{{ route('admin.categoria.create') }}">Agregar</a>

<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>OPERACIONES</th>
    </tr>

    @foreach($categorias as $categoria)
    <tr>
        <td>{{ $categoria->id }}</td>
        <td>{{ $categoria->nombre }}</td>
        <td>
            <a href="{{ route('admin.categoria.edit', $categoria->id) }}">Editar</a>
            <a href="{{ route('admin.categoria.show', $categoria->id) }}">Eliminar</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
