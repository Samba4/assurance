<?php

namespace app\Http\Controllers\Auth;

use app\User;
use app\Compte;
use Illuminate\Http\Request;

use app\Notifications\RegisterNotify;
use app\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegistersController
{

    public function create()
    {
        return view('layouts.register');
    }

    public function store(User $user, Compte $compte)
    {

        $user = new User;
        $user->nom = request('nom');
        $user->prenom = request('prenom');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();
        $compte->user_id = $user->id;
        $compte->description = request('description');
        $compte->url = request('url');

        $compte->save();
        auth()->login($user);

        return redirect()->route('home');
    }
}
