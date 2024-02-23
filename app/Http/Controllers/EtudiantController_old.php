<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Etudiant;
use App\Models\Sexe;


class EtudiantController extends Controller
{

    //
    public function index(){
        $etudiants=Etudiant::SELECT(['id', 'nom' , 'prenom' , 'sexe']) ->get();
        return view ('etudiant.index') -> with ('etudiants',$etudiants);
    }

    public function ajout_etudiant(){
        $sexes = Sexe::pluck( 'libelle','id'); // Assurez-vous que la méthode pluck renvoie des données sous forme d'objets ou de tableaux associatifs
        
        // $sexes = Sexe::SELECT(['id', 'libelle']) ->get();
        //dd($sexes);
        
        return view('etudiant.ajout')->with('sexes', $sexes);
    }
    
    public function enregistrer_etudiant(Request $request){  
          $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required',
            'sexe' => 'required',
        ]);
        Etudiant::create($request->all());
        
        $etudiants=Etudiant::SELECT(['id', 'nom' , 'prenom' , 'sexe']) ->get();
        return view ('etudiant.index') -> with ('etudiants',$etudiants);
    }
    public function destroy ($id){
       // Etudiant::delete($id);
        $etudiants=Etudiant::SELECT(['id', 'nom' , 'prenom' , 'sexe']) ->get();
        return view ('etudiant.index') -> with ('etudiants',$etudiants);
    }
}
