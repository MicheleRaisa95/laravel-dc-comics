@extends('layout')

@section('content')
    <div class="container">
        <h1 class="my-5">Crea Nuovo Fumetto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required minlength="3">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" required minlength="10">{{ old('description') }}</textarea>
            </div>
            <div class="form-group">
                <label for="author">Autore</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}" required>
            </div>
            <div class="form-group">
                <label for="thumb">URL Miniatura</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}" required>
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}" required>
            </div>
            <div class="form-group">
                <label for="sale_date">Data di Vendita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}" required>
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}" required>
            </div>
            <div class="form-group">
                <label for="artists">Artisti</label>
                <textarea class="form-control" id="artists" name="artists" required>{{ old('artists') }}</textarea>
            </div>
            <div class="form-group">
                <label for="writers">Scrittori</label>
                <textarea class="form-control" id="writers" name="writers" required>{{ old('writers') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>
            <button type="reset" class="btn btn-secondary">Cancella</button>
        </form>
    </div>
@endsection
