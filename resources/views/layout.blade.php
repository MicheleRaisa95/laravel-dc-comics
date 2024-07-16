<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fumetti')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header">
        <nav>
            <a href="{{ route('comics.index') }}">Home</a>
            <a href="#">Characters</a>
            <a href="#">Movies</a>
            <a href="#">TV</a>
            <a href="#">Games</a>
            <a href="#">Collectibles</a>
            <a href="#">Videos</a>
            <a href="#">Fans</a>
            <a href="#">News</a>
            <a href="#">Shop</a>
        </nav>
    </header>

    <main class="main-content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                <a href="#">Digital Comics</a>
                <a href="#">DC Merchandise</a>
                <a href="#">Subscription</a>
                <a href="#">Comic Shop Locator</a>
                <a href="#">DC Power Visa</a>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-primary">Sign-Up Now!</a>
                <div class="social-links">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">YouTube</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
