@extends('layout')

@extends('layout')

@section('content')
    <div class="container">
        <h1 class="text-center my-5">Current Series</h1>
        <div class="comics-list">
            @foreach ($comics as $comic)
                <div class="comic-item">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <h3>{{ $comic->title }}</h3>
                    <p>{{ $comic->series }}</p>
                </div>
            @endforeach
        </div>
        <button class="btn btn-primary load-more">Load More</button>
    </div>
@endsection
