<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BoardGame</title>
    @include('snippets.header')
</head>
<body>
    <div class="container">
        <h1>BoardGame</h1>
        @auth
        <a href="{{ route('game') }}">Continue Game</a>
        @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
        @endauth
    </div>
</body>
</html>
