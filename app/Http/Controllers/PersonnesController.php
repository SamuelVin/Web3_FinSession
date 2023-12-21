<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Personne;
use App\http\Requests\PersonneRequest;
use Illuminate\Support\Facades\Log;

class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personnes = Personne:: all();
        $films = Film:: all();
        return view('personnes.acceuil',compact('personnes','films'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnes.create');
    }


    public function createPersonneFilm()
    {
        $personnes = Personne::all();
        $films = Film::all();
        return view('personnes.createPersonneFilm', compact('films', 'personnes'));
    }

    public function storePersonneFilm(Request $request)
    {
        try{
         $personne = Personne::find($request->personne_id);
         $film = Film::find($request->film_id);

         $personne->films()->attach($film);

         $personne->save();
         return redirect()->route('films.acceuil');
        }
        catch(\Throwable $e)
        {
          /* Le fichier de log est dans storage \Logs\Laravel.log */
          Log::debug($e);
          return redirect()->route('films.acceuil');
        }
        return redirect()->route('films.acceuil');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonneRequest $request)
  
    {
        try{

           $film =new Personne ($request->all());
            $personne->save();
        }
        catch(\Throwable $e)
        {
            log::debug($e);
     }
        return redirect()->route('films.acceuil');
   
   return redirect()->route('films.acceuil');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Personne $personne)
    {
        return View('personnes.zoomPersonne', compact('personne'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personne = Personne::findOrFail($id);
        return View('personnes.modifierPersonne', compact('personne'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $personne = Personne::findOrFail($id);
            $personne->nom = $request->nom;
            $personne->prenom = $request->prenom;
            $personne->dateNaissance = $request->dateNaissance;
          
             $personne->save();
             return redirect()->route('personnes.acceuil')->with('message', "Modification de la personne " . $personne->nom . "réussi!");
            }
             catch(\Throwable $e){
           
            Log::debug($e);
             return redirect()->route('personnes.acceuil')->withErrors(['la modification n\'a pas fonctionné']);
             }
             return redirect()->route('personnes.acceuil'); 
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $personne=Personne::findOrFail($id);

            $personne->films()->detach();

            $personne->delete();

            return redirect()->route('personnes.acceuil')->with('message', "Suppresion de la personne" . $personne->nom . "réussi!");
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('personnes.acceuil')->withErrors(['la suppression n\'a pas fonctionné']);
        }
        return redirect()->route('personnes.acceuil');
    }

    public function storePersonne(Request $request)
    {
        try{
            $film = Film::findOrfail($request->film_id);
            $personne = Personne::findOrFail($request->personne_id);

            /* Verifier s la relation existe */
            if($film->Personnes->contains($personne)){
                return redirect()->route('personnes.acceuil')->withErrors(['Relation existe']);
            }
            else{
                $film->Personnes()->attach($personne);
            }
            $film->save();

            return redirect()->route('personnes.acceuil')->with('message','Relation OK');
        }

        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('personnes.acceuil')->withErrors(['Relation Bogue!']);
        }
        return redirect()->route('personnes.acceuil');
    
    }
}
  