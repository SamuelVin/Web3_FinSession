@extends('layouts.app')

@section('titre','film')

@section('contenu')


<h1 class="text-center">Page de modification du film {{ $film->nom }}</h1>
@if (isset($film))
<div class="container">
<div class="row">
<div class="col-6">

<form method="POST" action="{{ route('films.update', [$film->id]) }}">
 @csrf
@method('PATCH')
<div class="form-group">
        <label for="titre"> Titre du films </label>
        <input type="text" class="form-control" id="titre" placeholder="Titre du film" name="titre" value="{{ old('titre', $film->titre)}}"><br><br>

        <label for="annee"> Annee de realisation </label>
        <input type="text" class="form-control" id="annee" placeholder="Annee de realisation" name="annee" value="{{ old('annee', $film->annee)}}"><br><br>
        
        <label for="brand"> Brand du film </label>
        <input type="text" class="form-control" id="brand" placeholder="Brand du film" name="brand" value="{{ old('brand')}}"><br><br>

        <label for="langues"> Langue du film </label>
        <input type="text" class="form-control" id="langues" placeholder="Langue du film" name="langues" value="{{ old('langues')}}"><br><br>

        <label for="soustitres"> soustitres du film </label>
        <input type="text" class="form-control" id="soustitres" placeholder="soustitres du film" name="soustitres" value="{{ old('soustitres')}}"><br><br>

        <label for="Personnes"> Personnes du film </label>
        <input type="text" class="form-control" id="Personnes" placeholder="Personnes du film" name="Personnes" value="{{ old('Personnes')}}"><br><br>

        <label for="rating"> Rating du film </label>
        <input type="text" class="form-control" id="rating" placeholder="rating du film" name="rating" value="{{ old('rating')}}"><br><br>

        <label for="cote"> Cote du film </label>
        <input type="text" class="form-control" id="cote" placeholder="Cote du film" name="cote" value="{{ old('cote')}}"><br><br>

        <label for="type"> Type du film </label>
        <input type="text" class="form-control" id="type" placeholder="Type du film" name="type" value="{{ old('type')}}"><br><br>

        <label for="realisateur"> Realisateur du film </label>
        <input type="text" class="form-control" id="realisateurFilm" placeholder="Realisateur du film" name="realisateur" value="{{ old('realisateur', $film->realisateur)}}"><br><br>
        
        <label for="duree">Duree du film </label>
        <input type="text" class="form-control" id="dureeFilm" placeholder="Duree du film " name="duree" value="{{ old('duree', $film->duree)}}"><br><br>
        
        <label for="duree">Description </label>
        <input type="text" class="form-control" id="description" placeholder="Description du film " name="description" value="{{ old('description', $film->description)}}"><br><br>
        
        <label for="image"> Lien image du film </label>
        <input type="url" class="form-control" id="lienImgFilm" placeholder="Lien image du film" name="image" value="{{ old('image', $film->image)}}"><br><br>
        
        <label for="genre-select">genre du film </label>
        <select name="genre" id="genre-select" value="{{ old('genre', $film->genre)}}">
            <option value="divers">Divers</option>
            <option value="top">Top</option>
            <option value="drame">Drame</option>
            <option value="horreur">Horreur</option>
            <option value="jeunesse">jeunesse</option>
            <option value="noir">Noir</option>
        </select>
       
        <label for="video"> Lien vidéo preview du film </label>
        <input type="url" class="form-control" id="lienImgFilm" placeholder="Lien vidéo preview du film" name="video" value="{{ old('video', $film->video)}}"><br><br>
 
    </div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
</div>
</form>


</form> 

</div>
</div>
@endif