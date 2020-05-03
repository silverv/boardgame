<div class="navbar">
    <a href="{{ route('index') }}">BoardGame</a>
    @auth
    <a class="navbar-user" href="{{ route('home') }}">{{ Auth::user()->name }}</a>
    @endauth
</div>