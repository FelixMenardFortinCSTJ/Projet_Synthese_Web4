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
    <link rel="stylesheet" href="css/style.css">
    <title>@yield('titre')</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="tableauDeBordProfil.html">Profil</a></li>
            <li><a href="tableauDeBordAdmin.html">Admin</a></li>
            <li><a href="PortraitRegion.html">Région</a></li>
            <li><a href="CréationDunCompte.html">Création de compte</a></li>
            <li><a href="ForfaitsAccueil.html">Forfaits</a></li>
        </ul>
    </header>
    <div class="interface">
        @yield('contenu')
    </div>
</body>
</html>