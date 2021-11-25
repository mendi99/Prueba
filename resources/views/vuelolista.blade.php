<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        @foreach($vuelos as $vuel)
            {{ $vuel->nombre }};
            <ul><li>{{ $vuel->origen }}</li>
            <li>{{ $vuel->destino }}</li></ul>
        @endforeach
    </body>
</html>
