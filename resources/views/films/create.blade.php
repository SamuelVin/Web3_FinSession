

@extends('layouts.app')

@section('titre', 'acceuil')
@section('contenu')



    <h1> Ajouter un film </h1>
    <form method="post" action="{{ route('films.store')}}" enctype="multipart/form-data">
    @csrf
     <div class="form-group col-4" >
        <label for="titre"> Titre du film </label>
        <input type="text" class="form-control" id="titre" placeholder="Titre du film" name="titre" value="{{ old('titre')}}"><br><br>

        <label for="annee"> Annee de realisation </label>
        <input type="text" class="form-control" id="annee" placeholder="Annee de realisation" name="annee" value="{{ old('annee')}}"><br><br>

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
        <input type="text" class="form-control" id="realisateurFilm" placeholder="Realisateur du film" name="realisateur" value="{{ old('realisateur')}}"><br><br>

        <label for="duree">Duree du film </label>
        <input type="text" class="form-control" id="dureeFilm" placeholder="Duree du film " name="duree" value="{{ old('duree')}}"><br><br>

        <label for="description">Description du film </label>
        <input type="text" class="form-control" id="descriptioneFilm" placeholder="Description du film " name="description" value="{{ old('description')}}"><br><br>

        <label for="image"> Lien image du film </label>
        <input type="file" class="form-control" id="lienImgFilm" placeholder="Lien image du film" name="image" value="{{ old('image')}}"><br><br>

        <label for="genre-select">genre du film </label>
        <select name="genre" id="genre-select" value="{{ old('genre')}}"><br><br>
            <option value="divers">Divers</option>
            <option value="top">Top</option>
            <option value="drame">Drame</option>
            <option value="horreur">Horreur</option>
            <option value="jeunesse">jeunesse</option>
            <option value="noir">Noir</option>
        </select>

        <label for="video"> Lien vidéo preview du film </label>
        <input type="url" class="form-control" id="lienImgFilm" placeholder="Lien vidéo preview du film" name="video" value="{{ old('video')}}"><br><br>
       
    </div><br>
    
    <button type="submit" class="btn btn-primary">Enregistrer</button>
     </form>

@endsection