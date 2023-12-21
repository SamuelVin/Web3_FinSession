

@extends('layouts.app')

@section('titre', 'index')
@section('contenu')
<!-- tout le site ici -->




<body>
  <H1> LISTE DES FILMS</H1>


  <div class="location" id="home">
 
        <h1 id="maListe">Ma liste</h1>
     <div class="box">
      @if (count($filmDivers))
       @foreach($filmDivers as $film)
       <a href="{{ route('films.show', [$film]) }}"><img src="{{ asset ('img/films/' . $film->image) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}" width="300px" height="200px"> 

    </a>
       @endforeach 
       @else
       <P>il n'ya pas de film</p>
       @endif
       </div> 
     
       <h1 id="top">Top 10 des series aujourd'hui: Canada</h1>
     <div class="box">
      @if (count($filmTop))
       @foreach($filmTop as $film)
       <a href="{{ route('films.show', [$film]) }}"><img src="{{ asset ('img/films/' . $film->image) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}" width="300px" height="200px"> 
          </a>
       @endforeach @else
       <P>il n'ya pas de film</p>
       @endif
       </div>

       <h1 id="drame">Drames</h1>
       <div class="box">
      @if (count($filmDrame))
       @foreach($filmDrame as $film)
       <a href="{{ route('films.show', [$film]) }}"><img src="{{ asset ('img/films/' . $film->image) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}" width="300px" height="200px"> 
       
          </a>
       @endforeach @else
       <P>il n'ya pas de film</p>
       @endif
       </div>

  
       <h1 id="horreur">Films d'horreur</h1>
     <div class="box">
      @if (count($filmHorreur))
       @foreach($filmHorreur as $film)
       <a href="{{ route('films.show', [$film]) }}"><img src="{{ asset ('img/films/' . $film->image) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}" width="300px" height="200px"> 
         
          </a>
       @endforeach @else
       <P>il n'ya pas de film</p>
       @endif
       </div>

       <h1 id="jeunesse">Films et series jeunesse</h1>
     <div class="box">
      @if (count($filmJeunesse))
       @foreach($filmJeunesse as $film)
       <a href="{{ route('films.show', [$film]) }}"><img src="{{ asset ('img/films/' . $film->image) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}"  width="300px" height="200px"> 
       
          </a>
       @endforeach @else
       <P>il n'ya pas de film</p>
       @endif
       </div>

       <h1 id="noir">Héros et héroines noirs</h1>
     <div class="box">
      @if (count($filmNoir))
       @foreach($filmNoir as $film)
       <a href="{{ route('films.show', [$film]) }}"><img src="{{ asset ('img/films/' . $film->image) }}" alt="{{ $film->titre }}" title="{{ $film->titre }}" width="300px" height="200px"> 
      
          </a>
       @endforeach @else
       <P>il n'ya pas de film</p>
       @endif
       </div>

</body>


@endsection

