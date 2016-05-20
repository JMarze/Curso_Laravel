@extends('template.main')
@section('title', 'Editar Categoria')
@section('principal', 'Editar Categoria')

@section('contenido')
<form action="{{ route('admin.categoria.update', $categoria->id) }}" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ $categoria->nombre }}"/>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT"/>
    <input type="submit"/>
</form>
@endsection
