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

    </header>
    <div class="interface">
        @yield('contenu')
    </div>
    <footer>
        <div class="infolettre">
                <img class="Logo" src="{{asset('svg/logo.svg')}}" alt="Logo">
                <h2>
                    Infolettre
                </h2>
                <p>
                    inscrivez-vous à l'infolettre pour ne jamais rien manquer!
                </p>
                <div class="email">
                    <input id="infolettre"  type="text"
                    name="email" placeholder="Votre email ici"> 
                    <a href="#"> S'inscrire</a>
                </div>
            </div>
            <div class="navFooter">
                <a href="question.html">FAQ</a>
                <a href="question.html">Politique de confidentialité</a>
                <h3>Nous contacter</h3>
                <p>1234 boulevard de Montigny Saint-Jérôme (Québec) A1B2C3</p>
                <p>450-436-1234 / 1-866-436-5678</p>
            </div>
        </footer>
</body>
</html>