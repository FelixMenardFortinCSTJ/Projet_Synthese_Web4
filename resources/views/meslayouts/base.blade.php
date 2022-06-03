<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('node_modules/animate.css/animate.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;700&family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('titre')</title>
</head>
<body>
    <header class="Main">
        <img class="Logo" src="{{asset('svg/placeholder.svg')}}" alt="Logo">
        
        
        <nav class="mainNav">
            
        
            
            <input class="navSupp" id="searchbar"  type="text"
            name="search" placeholder="Vous recherchez...">
            
            <ul class="navSupp">
                <li><a href="CréationDunCompte.html">S'inscrire</a></li>
                <li><a href="">Se connecter</a></li>
                <li><a href="tableauDeBordProfil.html">Profil</a></li>
                <li><a href="tableauDeBordAdmin.html">Admin</a></li>
            </ul>

<<<<<<< HEAD
        <ul class="navSupp">
            <li><a href="CréationDunCompte.html">S'inscrire</a></li>
            <li><a href="">Se connecter</a></li>
            <li><a href="tableauDeBordProfil.html">Profil</a></li>
            <li><a href="tableauDeBordAdmin.html">Admin</a></li>
        </ul>

        <ul class="nav">
            <li><a href="sousCategorie.html">Agriculture</a></li>
            <li><a href="sousCategorie.html">Restauration</a></li>
            <li><a href="sousCategorie.html">Agroalimentaire</a></li>
            <li><a href="sousCategorie.html">Activités</a></li>
            <li><a href="sousCategorie.html">Hébergement</a></li>
            <li><a href="{{route('forfaits.index')}}">Forfaits</a></li>
            <li><a href="PortraitRegion.html">Portrait de la région</a></li>
        </ul>
=======
            <ul class="nav">
                <li><a href="sousCategorie.html">Agriculture</a></li>
                <li><a href="sousCategorie.html">Restauration</a></li>
                <li><a href="sousCategorie.html">Agroalimentaire</a></li>
                <li><a href="sousCategorie.html">Activités</a></li>
                <li><a href="sousCategorie.html">Hébergement</a></li>
                <li><a href="ForfaitsAccueil.html">Forfaits</a></li>
                <li><a href="PortraitRegion.html">Portrait de la région</a></li>
            </ul>
>>>>>>> CANS2039264_2

            <span id="btn-burger">
                    <div class="container-btn">
                        <div class="btn-line"></div>
                        <div class="btn-line"></div>
                        <div class="btn-line"></div>
                    </div>
            </span>

        </nav>  
    </header>
    <div class="interface">
        @yield('contenu')
    </div>

    <script src={{asset('js/script.js')}}></script>
</body>
</html>