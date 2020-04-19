<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shakespare</title>
</head>
<body>
    <ul>
        <li> <a href="{{ route('welcome') }}">Inicio</a></li>
        <li> <a href="{{ route('libros.index') }}">Lista libros</a></li>
        <li> <a href="{{ route('libros.create') }}">Añadir libro</a></li>
    </ul>
    @yield('titulo')
    @yield('contenido')
</body>
</html>