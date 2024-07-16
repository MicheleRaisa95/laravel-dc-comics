@extends('layout')

@section('content')
    <div class="container">
        <h1 class="my-5">{{ $comic->title }}</h1>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p class="mt-3">Prezzo: {{ $comic->price }}</p>
        <p>{{ $comic->description }}</p>
        <p>Artisti: {{ $comic->artists }}</p>
        <p>Scrittori: {{ $comic->writers }}</p>
        <p>Serie: {{ $comic->series }}</p>
        <p>Data di pubblicazione: {{ $comic->sale_date }}</p>
        <p>Genere: {{ $comic->type }}</p>
    </div>
@endsection
