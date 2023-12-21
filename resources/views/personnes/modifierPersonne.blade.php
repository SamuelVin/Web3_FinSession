@extends('layouts.app')

@section('titre', 'acceuil')
@section('contenu')


<h1 class="text-center">Modification de l'acteur(trice) {{ $personne->nom }}</h1>
@if (isset($personne))
<div class="container">
<div class="row">
<div class="col-6">

    <form method="post" action="{{ route('personnes.update', [$personne->id])}}">
    @csrf
    @method('PATCH')
     <div class="form-group col-6">
        <label class="form-label" for="nomActeur"> Nom de l'auteur</label>
        <input type="text" class="form-control" id="nomActeur" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom de l'acteur" name="nom" value="{{ old('nom', $personne->nom)}}"><br><br>

        <label class="form-label" for="prenomActeur"> prenom de l'auteur</label>
        <input type="text" class="form-control" id="prenomActeur" class="form-control @error('prenom') is-invalid @enderror" placeholder="prenom de l'acteur" name="prenom" value="{{ old('prenom', $personne->prenom)}}"><br><br>

        <label class="form-label" for="dateNaissActeur"> date de naissance de l'auteur</label>
        <input type="date" class="form-control" id="dateNaissActeur" class="form-control @error('dateNaissance') is-invalid @enderror" placeholder="date de naissance de l'acteur" name="dateNaissance" value="{{ old('dateNaissance', $personne->dateNaissance)}}">
    
    
    </div><br>
    
    <button type="submit" class="btn btn-primary">Enregistrer</button>
     </form>

     </form> 
     </div>
</div>
@endif

     @endsection