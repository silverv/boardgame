@extends('layouts.app')

@section('content')
<div class="log">
    
</div>
<meta name="move-url" content="{{ route('api.move', Auth::id()) }}">
<meta name="get-game-url" content="{{ route('api.get_game', Auth::id()) }}">
{{ method_field('PUT') }}
<script src="{{ URL::asset('js/game.js') }}"></script>
@endsection