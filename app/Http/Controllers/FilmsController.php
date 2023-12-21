<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Film;
use App\http\Requests\FilmRequest;
use Illuminate\Support\Facades\Log;

class filmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
         $filmDivers = Film::where('genre', 'divers')->get();

        $filmTop = Film::where('genre', 'top')->get();

        $filmDrame = Film::where('genre', 'drame')->get();
        
        $filmHorreur = Film::where('genre', 'horreur')->get();

         $filmJeunesse = Film::where('genre', 'jeunesse')->get();

         $filmNoir = Film::where('genre', 'noir')->get();
  
        return View('films.acceuil', compact('filmDivers', 'filmTop', 'filmDrame', 'filmHorreur', 'filmJeunesse', 'filmNoir'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmRequest $request)
    {
          try{

            $film =new Film ($request->all());

            $uploadedFile = $request->file('image');
            
                $nomFichierUnique = str_replace(' ', '_', $film->titre) . '_' . uniqid() . '_' . $uploadedFile->extension();

               try{
                $request->image->move(public_path('img/films'), $nomFichierUnique);
                  }
              catch(\Symfony\Component\HttpFoundation\File\Exception\FileException $e) {
                Log::error("Erreur lors du téléversement du fichier. ", [$e]);
                  }

            $film->image = $nomFichierUnique;
            $film->save();
 
                return redirect()->route('films.acceuil')->with('message', "Ajout du film" . $film->titre . "réussi!");
                  }
                  
              catch(\Throwable $e) {
             log::debug($e);
             return redirect()->route('films.acceuil')->withErrors(['ajout ne fonctionné pas']);
                 }
         
                 return redirect()->route('films.acceuil');
                
                }
      


   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Film $film)
    {
        return View('films.zoomFilm', compact('film'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return View('films.modifier', compact('film'));
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
           $film = Film::findOrFail($id);
           $film->titre = $request->titre;
           $film->annee = $request->annee;
           $film->genre = $request->genre;
           $film->image = $request->image;
           $film->duree = $request->duree;
           $film->realisateur = $request->realisateur;
           $film->description = $request->description;
            
            $film->save();
            return redirect()->route('films.acceuil')->with('message', "Modification du film " . $film->titre . "réussi!");
           }
            catch(\Throwable $e){
          
           Log::debug($e);
            return redirect()->route('films.acceuil')->withErrors(['la modification n\'a pas fonctionné']);
            }
            return redirect()->route('films.acceuil'); 
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
            $film=Film::findOrFail($id);

            $film->acteurs()->detach();

            $film->delete();

            return redirect()->route('films.acceuil')->with('message', "Suppresion du film" . $film->nom . "réussi!");
        }
        catch(\Throwable $e){
            Log::debug($e);
            return redirect()->route('films.acceuil')->withErrors(['la suppression n\'a pas fonctionné']);
        }
        return redirect()->route('films.acceuil');
       
        }
    }

