<?php

namespace app\Http\Controllers;

use app\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = request()->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'objet' => 'required|min:10',
            'message' => 'required|min:20'
        ]);

        Mail::to('bdeb1fb0e8-a9a6d5@inbox.mailtrap.io')->send(new ContactMail($data));
        return back()->with('ok', __("Votre message à bien été envoyée"));
    }
}
