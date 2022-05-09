<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Les entreprises</h1>
    <div class="tableau entreprises">
        @foreach($entreprises as $entreprise)
        <div class="entreprises">
            <a href="{{route('entreprises.show', $entreprise['id'])}}">
                <span class="logo"><img src="{{$entreprise->logo_etablissement}}" alt=""></span>
                <span class="nom">{{$entreprise->nom}}</span>
            </a>
        </div>
        @endforeach
    </div>
<body>