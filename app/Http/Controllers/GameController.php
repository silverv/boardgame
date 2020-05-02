<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Scene;
use App\Option;
use App\Http\Requests\MovePutRequest;

class GameController extends Controller
{
    public function index()
    {
        return view('game');
    }

    public function move(MovePutRequest $request, User $user)
    {
        $validated = $request->validated();
        $user->savegame = $request->option_id;
        $user->save();
        $scene_raw = $user->scene;
        $options_array = $scene_raw->options->toArray();
        $scene_array = $scene_raw->toArray();
        return $scene_array;
    }

    public function get_game(User $user)
    {
        $scene_raw = $user->scene;
        $options_array = $scene_raw->options->toArray();
        $scene_array = $scene_raw->toArray();
        return $scene_array;
    }
}
