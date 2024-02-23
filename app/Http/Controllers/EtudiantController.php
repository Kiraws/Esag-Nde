<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Sexe;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //
        $etudiants=Etudiant::SELECT(['id', 'nom' , 'prenom' , 'sexe']) ->get();
        return view ('etudiants.index') -> with ('etudiants',$etudiants);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $sexes = Sexe::pluck( 'libelle','id'); // Assurez-vous que la méthode pluck renvoie des données sous forme d'objets ou de tableaux associatifs
        
        // $sexes = Sexe::SELECT(['id', 'libelle']) ->get();
        //dd($sexes);
        
        return view('etudiant.ajout')->with('sexes', $sexes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // //
        // $request->validate([
        //     'nom' => 'required|max:255',
        //     'prenom' => 'required',
        //     'sexe' => 'required',
        // ]);
        // Etudiant::create($request->all());
        
        // $etudiants=Etudiant::SELECT(['id', 'nom' , 'prenom' , 'sexe']) ->get();
        // return view ('etudiant.index') -> with ('etudiants',$etudiants);
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
