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
        <a href=" {{ url("api/vuelos") }}"> Mostrar</a>
        <a href=" {{ url("api/vuelos/8") }}"> Mostrar</a>
        <form action="{{ url("api/vuelos/22")}}" method="post">
            @csrf
            @method("delete")
            <button type="submit"> Enviar</button>
        </form>
    </body>
</html>
