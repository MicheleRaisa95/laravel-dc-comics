@extends('layout')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <p><strong>Autore:</strong> {{ $comic->author }}</p>
    <a href="{{ route('comics.index') }}">Torna all'elenco</a>
@endsection
