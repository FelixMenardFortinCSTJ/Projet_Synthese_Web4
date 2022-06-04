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

        <img class="Logo" src="{{asset('_assets/svg/Logo.svg')}}" alt="Logo">
        <nav class="mainNav">
            <form action="{{ url('/categories/search') }}" method="GET">
                <input type="search" name="search" placeholder="Catégorie ..." aria-label="Search">
            </form>
            {{-- @include('meslayouts.nav') --}}
            <ul class="navSupp">
                <li><a href="{{route('register')}}">S'inscrire</a></li>
                <li><a href="{{route('login')}}">Se connecter</a></li>
                <li><a href="{{route('dashboard')}}">Profil</a></li>
                <li><p id="OpenPanier">Panier</p></li>
            </ul>
            <ul class="nav">
                {{-- <li><a href="{{route('accueil')}}">Accueil</a></li> --}}
                <li><a href="{{route('groupes.show', 1)}}">Agriculture</a></li>
                <li><a href="{{route('groupes.show', 2)}}">Activités</a></li>
                <li><a href="{{route('groupes.show', 3)}}">Agroalimentaire</a></li>
                <li><a href="{{route('groupes.show', 4)}}">Restauration</a></li>
                <li><a href="{{route('groupes.show', 5)}}">Hébergement</a></li>
                <li><a href="{{route('forfaits.index')}}">Forfaits</a></li>
                <li><a href="{{route('mrcs.index')}}">Portrait de la région</a></li>
            </ul>
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
    <footer>
        <div class="infolettre">
                <img class="Logo" src="{{asset('_assets/svg/Logo.svg')}}" alt="Logo">
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
                <div class="contacts">
                    <h3>Nous contacter</h3>
                    <p>1234 boulevard de Montigny Saint-Jérôme (Québec) A1B2C3</p>
                    <p>450-436-1234 / 1-866-436-5678</p>
                </div>
            </div>
        </footer>
    <script src={{asset('js/Panier.js')}}></script>
    <script src={{asset('js/script.js')}}></script>
</body>
</html>
