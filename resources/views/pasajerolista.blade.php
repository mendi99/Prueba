<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        @foreach($pasajeros as $pasa)
            {{ $pasa->nombre }};
            <ul><li>{{ $pasa->dni }}</li>
            <li>{{ $pasa->edad }}</li></ul>
        @endforeach
    </body>
</html>
