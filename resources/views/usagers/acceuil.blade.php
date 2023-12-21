@extends('layouts.app')

@section('titre', 'acceuil')
@section('contenu')


<body>
<div class="location border-warning" id="home">
    <div class="box my-5">
        @if(count($usagers))
          @foreach($usagers as $usager)
          <a href="{{ route('usagers.acceuil', [$usager]) }}">
        <h6 class="" style="text-align: center;color:white;"> {{ $usager->nom}} {{ $usager->prenom}} {{ $usager->role}} {{ $usager->sexe}} {{ $usager->email}} </h6>
          @endforeach
        @else
             <p> Il n'ya pas d'usagers. </p>
        @endif
    </div>

</body>


@endsection