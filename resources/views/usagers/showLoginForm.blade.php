@extends('layouts.app')

@section('titre', 'acceuil')
@section('contenu')



    <h1> Veuillez vous connecter</h1>
    <form method="post" action="{{ route('login')}}">
    @csrf
    <div class="form-group col-4" >
        <label for="nom"> Nom de l'usager </label>
        <input type="text" class="form-control" id="nom" placeholder="Nom de l'usager" name="nom" value="{{ old('nom')}}"><br><br>

        <label for="prenom"> Prenom de l'usager </label>
        <input type="text" class="form-control" id="prenom" placeholder="Prenom de l'usager" name="prenom" value="{{ old('prenom')}}"><br><br>

        <label for="role"> Role de l'usager </label>
        <input type="text" class="form-control" id="role" placeholder="Role de l'usager" name="role" value="{{ old('role')}}"><br><br>

        <label for="genre-select">Sexe de l'usager </label>
        <select name="sexe" id="genre-select" value="{{ old('sexe')}}"><br><br>
            <option value="masculin">Masculin</option>
            <option value="feminin">Feminin</option>
            <option value="neutre">Neutre</option>
        </select>

        <label for="email"> Courriel de l'usager </label>
        <input type="email" class="form-control" id="email" placeholder="Email de l'usager" name="email" value="{{ old('email')}}"><br><br>

        <label for="password"> Mot de passe</label>
        <input type="password" class="form-control" id="password" placeholder="Mot de passe de l'usager" name="password" value="{{ old('password')}}"><br><br>
       

        

    </div>
    
    <button type="submit" class="btn btn-primary">se connecter</button>

    <nav class="sub-nav">     <br>
     <a href="{{ route('usagers.create')}}">Nouvel usager</a> 
     </nav>
   
     </form>

@endsection