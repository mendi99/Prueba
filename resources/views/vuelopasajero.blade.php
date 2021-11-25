<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <form method="POST" action="/lista">
        @csrf
            <select name="pasajero">
            @foreach($pasajeros as $pasa)
                <option value="{{ $pasa->id }}">
                    {{ $pasa->nombre }}
                </option>
            @endforeach
            </select>
            <select name="vuelo">
            @foreach($vuelos as $vuel)
                <option value="{{ $vuel->id }}">
                    {{ $vuel->nombre }}
                </option>
            @endforeach
            </select>
            <label>Num Reservas:</label>
            <input type="number" name="reservas">
            <input type="submit" value="Reservar">
        </form>
        <h1>Vuelos Reservados</h1>
            @foreach($pasajeros as $pasa)
                @foreach($pasa->vuelo as $vuelo)
                <a>
                    {{ $pasa->nombre  }}
                    {{ $vuelo->nombre }}
                </a>
                <form method="POST" action="/lista/{{ $pasa->id }}/{{ $vuelo->id }}">
                    @csrf
                    @method('delete')
                    <input type="submit" name="delete" value="delete">
                </form>
                @endforeach
            @endforeach
    </body>
</html>
