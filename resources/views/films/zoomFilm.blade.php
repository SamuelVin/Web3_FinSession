@extends('layouts.app')

@section('titre','film')


@section('contenu')

<h1>Film {{ $film->titre }}</h1>
<div class="row col-xl-12">
@if (isset($film))
   <div class="col-4">
       <img src="{{ asset('img/films/' .  $film->image) }}" width="600px" heighr="600px">
   </div>

    <div class="col-4">
    
    <div class="">
    <h5> Titre </h5>
    <li>{{ $film->titre }}</li>
  </div>

  <div class="">
    <h5> Genre </h5>
    <li>{{ $film->genre }}</li>
    </div>

    <div class="">
    <h5> Annee </h5>
    <li>{{ $film->annee }}</li>
    </div>
   
    <div class="">
    <h5> Realisateur </h5>
    <li>{{ $film->realisateur }}</li>
    </div>

    <div class="">
    <h5> Description </h5>
    <li>{{ $film->description }}</li>
    </div>

    <div class="col-4">  

<iframe width="300" height="500" src="{{$film->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>


    <a type="button" class="btn btn-primary" href="{{ route('films.edit', [$film->id]) }}">Edit film</a> <br><br>
    <form method="post" action="{{route('films.destroy',[$film->id]) }}">
    @Csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete film</button>
     

    <!-- Afficher les acteurs d'un film particulier dans le zoom -->
@foreach($film->personnes as $personnefilm)
<div class="row col-12">
    <div class=" ">
<li> {{ $personnefilm->nom}} {{ $personnefilm->prenom}} </li>
<img src="{{$personnefilm->image}}" width="310px" height="320px">
</div>
</div>
@endforeach

</div>
</div>
@else

    <p>Le film n'existe pas</p>


@endif




@endsection