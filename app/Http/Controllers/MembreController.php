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
        //Afficher tous les membres
        // $membres = Membre::all();


        // Afficher uniquement les membres actifs
        $membres = Membre::where('actif', true)->get(); 

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
        $membre = Membre::findOrFail($id);

        return view('membres.edit', compact('membre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:membres,email,' . $id,
        ]);
        
        $membre = Membre::findOrFail($id);
        
        $membre->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'telephone' => $request->telephone,
            'email' => $request->email
        ]);
        
        return redirect('/membres');
    }

    /**
     * Remove the specified resource from storage.
     */
   
    public function destroy($id)
    {
        //
        $membre = Membre::findOrFail($id);
        $membre->delete();

        return redirect('/membres');
    }


    /**
     * Permet de desactiver un membre.
     */
    public function desactiver($id)
    {

        $membre = Membre::findOrFail($id);
        $membre->actif = false;
        $membre->save();

        return redirect('/membres')->with('success', 'Membre désactivé');
    }



     /**
     * Permet de reactiver un membre.
     */
    public function activer($id)
    {

        $membre = Membre::findOrFail($id);
        $membre->actif = true;
        $membre->save();

        return redirect()->back()->with('success', 'Membre réactivé');
    }



}
