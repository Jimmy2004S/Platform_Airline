<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">
        <a href=" {{ url("vuelos") }}"> Mostrar</a>
        <a href=" {{ url("vuelos/2") }}"> Mostrar uno</a>
        <form action="{{ url("vuelos")}}" method="POST">
            @csrf
            <input type="text" name="ciudad_partida">
            <input type="text" name="ciudad_destino">
            <input type="text" name="fecha">
            <input type="text" name="capacidad_pasajeros">
            <input type="text" name="cupos_disponibles">
            <input type="text" name="picture">
            <button type="submit"> Enviar</button>
        </form>
    </body>
</html>
