<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Categorias</title>
        <meta charset="utf-8"/>
    </head>

    <body>
        <h1>Listado de Categorias</h1>
        <hr/>

        <a href="{{ route('categoria.create') }}">Agregar</a>

        <table>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
            </tr>

            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nombre }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
