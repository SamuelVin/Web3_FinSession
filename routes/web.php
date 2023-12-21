<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmsController;
use App\Http\Controllers\personnesController;
use App\Http\Controllers\usagersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Films*/

Route::get('/films',
[filmsController::class, 'index'])->name('films.acceuil');

Route::get('/films/create',
[filmsController::class, 'create'])->name('films.create');

Route::get('/films/ajouter',
[filmsController::class, 'ajouter'])->name('films.ajouter');

Route::post('films',    
[filmsController::class, 'store'])->name('films.store');


Route::delete('/films/{id}',
[FilmsController::class, 'destroy'])->name('films.destroy');


Route::delete('/personnes/{id}',
[FilmsController::class, 'destroy'])->name('personnes.destroy');


/* Afficher le formulaire de modifications */
Route::get('/films/{id}/modifier/' ,
[FilmsController::class, 'edit'])->name('films.edit');

Route::get('/personnes/{id}/modifier/' ,
[PersonnesController::class, 'edit'])->name('personnes.edit');



/* Afficher le zoom */
Route::get('/films/{film}/zoom' ,
[FilmsController::class, 'show'])->name('films.show');

Route::get('zoom', function (){
    return view('films.zoomFilm');
});


Route::get('/personnes/{personne}/zoom' ,
[PersonnesController::class, 'show'])->name('personnes.show');

Route::get('zoom', function (){
    return view('personnes.zoomActeur');
});


/*Route pour enregistrer la modification*/
Route::patch('/films/{id}/edit' ,
[FilmsController::class, 'update'])->name('films.update');

Route::patch('/personnes/{id}/edit' ,
[PersonnesController::class, 'update'])->name('personnes.update');





/*Acteurs*/
    
Route::get('/personnes',
[personnesController::class, 'index'])->name('personnes.acceuil');

  
/*Afficher le formulaire de creation d'un acteur*/    
Route::get('personne/create',
[personnesController::class, 'create'])->name('personnes.create');

   /* Traiter les champs du formulaire */
Route::post('personnes',
[personnesController::class, 'store'])->name('personnes.store');

   /* Afficher le formulaire de creation d'un acteur_film */
Route::get('personnes/createPersonneFilm',
[personnesController::class, 'createPersonneFilm'])->name('personnes.createPersonneFilm');

Route::post('personnes/createPersonneFilm',
[personnesController::class, 'storePersonneFilm'])->name('personnesFilms.store');


/*Usagers  Usagers  Usagers  Usagers  Usagers  Usagers  Usagers  Usagers  Usagers  Usagers  Usagers  Usagers Usagers  Usagers  Usagers*/

Route::get('/usagers',
[usagersController::class, 'index'])->name('usagers.acceuil');
 
/*Afficher le formulaire de creation d'un usager*/    
Route::get('usagers/create',
[usagersController::class, 'create'])->name('usagers.create');

   /* Traiter les champs du formulaire */
Route::post('usagers',
[usagersController::class, 'store'])->name('usagers.store');




/*  Connection usager  Connection usager  Connection usager  Connection usager  Connection usager  Connection usager  Connection usager*/
Route::get('/showLoginForm',
[usagersController::class, 'showLoginForm'])->name('usagers.login');

Route::POST('/usagers/login',
[usagersController::class, 'login'])->name('login');

Route::POST('/usagers/logout',
[usagersController::class, 'logout'])->name('logout');