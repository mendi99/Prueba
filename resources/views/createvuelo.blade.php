<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <form method="POST" action="/vuelo/create">
            @csrf
            <p>Nombre:<input type="text" name="nombre"></p>
            <p>Origen:<input type="text" name="origen"></p>
            <p>Destino:<input type="text" name="destino"></p>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
