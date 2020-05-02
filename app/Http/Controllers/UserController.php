<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function update(UserUpdateRequest $request, User $user)
    {
        $validated = $request->validated();
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password !== '')
        {
            $password = Hash::make($request->password);
            $user->password = $password;
        }
        $user->save();
        return redirect()->route('home');
    }
}
