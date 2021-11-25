<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <form method="POST" action="/pasajero/create">
            @csrf
            <p>Nombre:<input type="text" name="nombre"></p>
            <p>Dni:<input type="text" name="dni"></p>
            <p>Edad:<input type="text" name="edad"></p>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
