<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;

class HomeController extends Controller
{
    //
    public function index()
    {
        /*
        Membre::create([
            'nom'=> 'Dupont',
            'prenom'=> 'Jean',
            'telephone'=> '123456789',
            'email'=> 'jean.dupont@example.com'
        ]);
         */

        $membres = Membre::all();
        return view('home', compact('membres')); // compact('membres') Envoie la variable à la vue.
    }

}