
<!--debut header-->
<!DOCTYPE html>
<html lang="fr-CA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('titre') </title>
   
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaquery.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://kit.fontawesome.com/bc3a1796c2.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="https://image.flaticon.com/icons/png/512/870/870910.ico"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"/>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css\films.css')}}">
  </head>

<body>

<header>
      <div class="netflixLogo">
        <a id="logo" href="#home"><img src="https://github.com/carlosavilae/Netflix-Clone/blob/master/img/logo.PNG?raw=true" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="{{ route('films.acceuil')}}">Home</a>
        <a href="{{ route('personnes.acceuil')}}">Afficher acteurs</a>
        <a href="{{ route('personnes.create')}}">Ajouter acteur</a>
        <a href="{{ route('films.create')}}">Ajouter film</a>
        <a href="{{ route('personnes.createPersonneFilm')}}">Ajouter relation</a>
        <a href="{{ route('usagers.acceuil')}}">Afficher usagers</a>
        <a href="{{ route('usagers.create')}}">Creer un usager</a>
             
      </nav>
      <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <a href="#">Account</a>                                                   
      </nav>      
    </header>   
<!--fin header-->
@if(isset($errors) && $errors->any())

   <div class="alert alert-danger">

     @foreach($errors->all() as $error)

      <p>{{ $error}}</p>

      @endforeach

</div>

@endif


<!-- contenu -->

    @yield('contenu')

<!-- fin contenu -->



<!-- debut footer -->
<footer>
      <p>&copy 1997-2018 Netflix, Inc.</p>
      <p>Carlos Avila &copy 2018</p>
    </footer>
<!-- fin footer -->

</body>
</html>
