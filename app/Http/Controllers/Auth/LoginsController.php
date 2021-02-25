<?php

namespace app\Http\Controllers\Auth;

use app\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class LoginsController
{
    public function create()
    {
        return view('layouts.login');
    }

    public function store()
    {
        $user = User::where('username', request('username'))->orWhere('email', request('username'))->first();
        if ($user) {
            if (password_verify(request('password'), $user->password)) {
                if (request('remember')) {
                    auth()->login($user, true);
                }
                auth()->login($user, false);
                return redirect(request('page'));
            }
        }
        return back();
    }

    public function logout()
    {
        Auth::logout();
        return back();
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from google.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }

    // Crée l'utilisateur dans la BDD 
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'nom' => $user->nom,
            'prenom' => $user->prenom,
            'username' => $user->username,
            'email'  => $user->email,
            'provider'  => strtoupper($provider),
            'provider_id' => $user->id,
        ]);
    }
}
