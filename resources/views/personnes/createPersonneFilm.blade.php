@extends('layouts.app')

@section('titre', 'acceuil')
@section('contenu')
<!-- tout le site ici -->

<section class="main-container">
    <div class="location" id="home">
        <h1 id="home">Ajouter une relation</h1>

        <form method="POST" action="{{ route('personnesFilms.store')}}">
            @csrf 

            <select name="personne_id" id="personne_id">
                @foreach($personnes as $personne)
                <option value="{{ $personne->id}}">{{ $personne->nom}}</option>
                @endforeach
            </select>
            <br>
            <select name="film_id" id="film_id">
                @foreach($films as $film)
                <option value="{{ $film->id }}">{{ $film->titre}}</option>
                @endforeach
            </select>

            <button type="submit">Enregistrer</option>

        </form>
    </div>
