<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IntroController;

use App\Http\Controllers\EtudiantController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



 Route::get('/',[IntroController::class,'index' ] );

 Route::get('chaine',[IntroController::class,'chaine' ] );

 Route::post('chaine',[IntroController::class,'calcChaine' ] );

//Création de la route vers la méthode multiplication de la classe IntroController

 Route::get('multiplication',[IntroController::class,'multiplication' ] );

 Route::post('multiplication',[IntroController::class,'multiplication' ] );

 Route::resource('etudiant', App\Http\Controllers\EtudiantController::class);


// //Création de la route vers la méthode index de la classe EtudiantController

//  Route::get('etudiant',[EtudiantController::class,'index' ] );

//  Route::get('ajout_etudiant',[EtudiantController::class,'ajout_etudiant' ] );
//  Route::post('enregistrer_etudiant',[EtudiantController::class,'enregistrer_etudiant' ] ) ->name('etudiant.enregistrer');
 //Route::get('supprEtudiant/{$id}',[EtudiantController::class,'supprEtudiant' ] )->name('supprEtudiant');
 //Route::delete('etudiant', App\Http\Controllers\EtudiantController::class);
 //Route::get('supprEtudiant',['as' => 'supprEtudiant' , 'uses' => 'EtudiantController@supprEtudiant'] );








