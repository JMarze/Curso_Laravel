<!DOCTYPE html>
<html lang="es">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8"/>
    </head>

    <body>
        <h1>@yield('principal')</h1>
        <hr/>

        @section('contenido')
        @show
    </body>
</html>
