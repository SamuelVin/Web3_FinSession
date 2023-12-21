
@extends('layouts.app')

@section('titre', 'acceuil')
@section('contenu')

    <h1> Ajouter un acteur </h1>
    <form method="post" action="{{ route('personnes.store')}}">
    @csrf
     <div class="form-group col-6">
        <label class="form-label" for="nomActeur"> Nom de l'auteur</label>
        <input type="text" class="form-control" id="nomActeur" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom de l'acteur" name="nom" value="{{ old('nom')}}"><br><br>

        <label class="form-label" for="prenomActeur"> prenom de l'auteur</label>
        <input type="text" class="form-control" id="prenomActeur" class="form-control @error('prenom') is-invalid @enderror" placeholder="prenom de l'acteur" name="prenom" value="{{ old('prenom')}}"><br><br>

        <label class="form-label" for="dateNaissActeur"> date de naissance de l'auteur</label>
        <input type="date" class="form-control" id="dateNaissActeur" class="form-control @error('dateNaissance') is-invalid @enderror" placeholder="date de naissance de l'acteur" name="dateNaissance" value="{{ old('dateNaissance')}}">
    
     
    
    </div><br>
    
    <button type="submit" class="btn btn-primary">Enregistrer</button>
     </form>


     @error('name')
<span class="text-danger">{{ $message }}</span>
@enderror


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script src="{{asset('js/jsvalidation.js')}}"></script>

     @endsection