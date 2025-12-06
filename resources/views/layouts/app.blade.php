<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Adity | Portfolio')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="site-nav">
    <div class="nav-container">
        <div class="nav-brand">Adity<span>.</span></div>

        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('projects') }}">Projects</a>
            <a href="{{ route('skills') }}">Skills</a>
            <a href="{{ route('contact') }}">Contact</a>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="site-footer">
    <p>© {{ date('Y') }} Adity Abdullah. All rights reserved.</p>
</footer>

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
