@extends('layout')

@section('content')
    <h1>Crea Nuovo Fumetto</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label>Titolo</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label>Descrizione</label>
            <textarea name="description">{{ old('description') }}"></textarea>
        </div>
        <div>
            <label>Autore</label>
            <input type="text" name="author" value="{{ old('author') }}">
        </div>
        <button type="submit">Salva</button>
    </form>
@endsection

