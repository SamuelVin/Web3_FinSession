@extends('layouts.app')

@section('titre','film')


@section('contenu')

<h1> {{ $personne->nom }} {{ $personne->prenom }}</h1>


<div class="row col-xl-12">
@if (isset($personne))
   <div class="col-4">
       <img src="{{ $personne->image }}" width="600px" heighr="600px">
   </div>


<div class="col-4">
    <div class="">
    <h5> Date de naissance </h5>
    <li>{{ $personne->dateNaissance }}</li>
 </div>

 </div>
 
    <a type="button" class="btn btn-primary" href="{{ route('personnes.edit', [$personne->id]) }}">Edit actor</a> <br><br>
    <form method="post" action="{{route('personnes.destroy',[$personne->id]) }}">
    @Csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete actor</button> 

@else

    <p>Le film n'existe pas</p>


@endif




@endsection