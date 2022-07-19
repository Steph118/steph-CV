<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class messageController extends Controller
{
    public function envoyerMessage(Request $request)
    {

        $s=$request->sujet;

        $request->validate([
            'name' => ['required','string','max:255'],
            'email'=> ['required', 'string', 'email', 'max:255'],
            'sujet' => ['required','string','min:3'],
            'messages' => ['required','string','min:5']
        ],
        [
            'email.email'=>'L\'email est invalide',
            'sujet.min'=>'Le sujet doit contenir au moins 3 caractères.',
            'messages.min'=>'Le message doit contenir au moins 5 caractères.'
        ]);

        $user=User::create([
            'name'=> $request->name ,
            'email'=> $request->email,
            'sujet'=> $request->sujet,
            'messages'=> $request->messages
        ]);
        return redirect(RouteServiceProvider::HOME);
    }
}
