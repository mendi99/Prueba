<a>
    {{ $pasa->nombre  }}
    {{ $vuelo->nombre }}
</a>
<form method="POST" action="/lista/{{ $pasa->id }}/{{ $vuelo->id }}">
    @csrf
    @method('delete')
    <input type="submit" name="delete" value="delete">
</form>