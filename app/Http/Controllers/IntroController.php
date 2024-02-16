<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    //
    public function index(){
        return view('index') ->with ('nom','Raph') ;
    }

    public function chaine(){
        return view('chaine.index') ->with ('longueur', 0) ;
    }

    public function calcChaine(Request $request ){
        $longueur=strlen($request -> nom );
        return view('chaine.index')  ->with ('longueur', $longueur) ;

    }
    public function multiplication(Request $request){
        $nombre = $request->input('nombre');
        $table = [];
        for ($i = 1; $i <= 10; $i++) {
            $table[] = $nombre . '   x   ' . $i . '   =   ' . ($nombre * $i);
        }
        return view('multiplication.index')->with('table', $table);
    }
    
}
