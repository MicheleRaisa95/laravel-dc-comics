@extends('layout')

@section('content')
    <h1>Fumetti</h1>
    <a href="{{ route('comics.create') }}">Crea Nuovo Fumetto</a>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
               <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="delete-btn">Elimina</button>
</form>

            </li>
        @endforeach
    </ul>

    <!-- Include JavaScript -->
    <script src="{{ asset('js/confirm-delate.js') }}"></script>
@endsection

