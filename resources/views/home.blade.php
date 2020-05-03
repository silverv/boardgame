@extends('layouts.app')

@section('content')
<div class="container">
    <a class="play-button" href="{{ route('game') }}">Play!</a>
    <h1>Edit Profile</h1>
    <form action="{{ route('user.update', Auth::id()) }}" class="profile-form" method="POST">
        @method('PUT')
        @csrf
        Name
        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}">
        Email
        <input type="email" name="email" id="email" value="{{ Auth::user()->email }}">
        Password
        <input type="password" name="password" id="password" placeholder="Optional: Change your password">
        <button>Submit</button>
    </form>
    <h5>{{ Auth::user()->name }}</h5>
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
        Logout
    </a>    
    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>
@endsection
