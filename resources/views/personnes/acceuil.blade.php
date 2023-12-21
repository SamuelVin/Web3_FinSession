@extends('layouts.app')

@section('titre', 'acceuil')
@section('contenu')


<body>
<div class="location border-warning" id="home">
    <div class="box my-5">
        @if(count($personnes))
          @foreach($personnes as $personne)
          <a href="{{ route('personnes.show', [$personne]) }}"><img src="{{$personne->image}}" width="300px" height="200px">
        <h6 class="" style="text-align: center;color:white;"> {{ $personne->nom}} {{$personne->prenom}} </h6>
          @endforeach
        @else
             <p> Il n'ya pas d'acteurs. </p>
        @endif
    </div>

</body>


@endsection
