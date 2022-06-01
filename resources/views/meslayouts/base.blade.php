<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/animate.css/animate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;700&family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('titre')</title>
</head>
<body>
    <header class="Main">
        <img class="Logo" src="{{asset('svg/placeholder.svg')}}" alt="Logo">
        
        <input class="navSupp" id="searchbar"  type="text"
            name="search" placeholder="Vous recherchez...">

        <ul class="navSupp">
            <li><a href="{{route('register')}}">S'inscrire</a></li>
            <li><a href="{{route('login')}}">Se connecter</a></li>
            <li><a href="tableauDeBordProfil.html">Profil</a></li>
            <li><a href="tableauDeBordAdmin.html">Admin</a></li>
        </ul>
        <ul class="nav">
            <li><a href="{{route('groupes.show', 1)}}">Agriculture</a></li>
            <li><a href="{{route('groupes.show', 2)}}">Activités</a></li>
            <li><a href="{{route('groupes.show', 3)}}">Agroalimentaire</a></li>
            <li><a href="{{route('groupes.show', 4)}}">Restauration</a></li>
            <li><a href="{{route('groupes.show', 5)}}">Hébergement</a></li>
            <li><a href="{{route('forfaits.index')}}">Forfaits</a></li>
            <li><a href="PortraitRegion.html">Portrait de la région</a></li>
        </ul>


    </header>
    <div class="interface">
        @yield('contenu')
    </div>
</body>
</html>