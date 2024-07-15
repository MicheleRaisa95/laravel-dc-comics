<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fumetti')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('comics.index') }}">Home</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
    <!-- Includi JavaScript nel layout principale -->
<script src="{{ asset('js/confirm-delete.js') }}"></script>
</body>
</html>
