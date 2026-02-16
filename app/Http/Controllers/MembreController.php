<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Membre;



class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $membres = Membre::all();
        return view('membres.index', compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('membres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email|unique:membres,email',
        'telephone' => 'nullable'
        ]);
        
        Membre::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'email' => $request->email
        ]);

        return redirect('/membres');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
