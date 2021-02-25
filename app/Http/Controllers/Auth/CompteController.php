<?php

namespace app\Http\Controllers\Auth;

use app\User;
use app\Compte;
use Illuminate\Http\Request;
use app\Policies\ComptePolicy;
use app\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CompteController extends Auth
{

    public function show(User $user)
    {
        return view('compte.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('compte.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'nullable'
        ]);

        $user->update($data);

        return redirect()->route('compte.show', ['user' => $user]);
    }




    public function profiledite(User $user, Compte $compte)
    {
        return view('profil.edit', compact('user'));
    }

    public function profilupdate(User $user, Compte $compte)
    {
        $data = request()->validate([
            'titre' => 'nullable',
            'description' => 'nullable',
            'url' => 'nullable|url',
        ]);

        $user->compte->update($data);

        return redirect()->route('compte.show', ['user' => $user])->with('ok', __("Votre profil a bien été modifiée !"));
    }
}
