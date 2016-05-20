@extends('template.main')
@section('title', 'Agregar Categoria')
@section('principal', 'Agregar Categoria')

@section('contenido')
<form action="{{ route('admin.categoria.store') }}" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"/>
    {{ csrf_field() }}
    <input type="submit"/>
</form>
@endsection
