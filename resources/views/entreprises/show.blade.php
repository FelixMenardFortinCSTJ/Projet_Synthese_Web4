<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Détails du membre : {{$entreprise->nom}}</h1>
<div class="detail">
    <div class="membre">
        <div class="logo"><img src="{{$entreprise->logo_etablissement}}" alt=""></div>
        <div class="nom">
            <span class="label">nom: </span>
            {{$entreprise->nom}}
        </div>
        <div class="adresse">
            <span class="label">adresse: </span>
            {{$entreprise->adresse}}
        </div>
        <div class="ville">
            <span class="label">ville: </span>
            {{$entreprise->ville}}
        </div>
        <div class="code_postal">
            <span class="label">code_postal: </span>
            {{$entreprise->codepostal}}
        </div>
        <div class="telephone">
            <span class="label">telephone: </span>
            {{$entreprise->telephone}}
        </div>
        <div class="url_photo">
            <span class="label">La Photo de l'entreprise: </span>
            {{$entreprise->url_photo}}
        </div>
        <div class="url_logo">
            <span class="label">Le logo de l'entreprise: </span>
            {{$entreprise->url_logo}}
        </div>
        <div class="url_site">
            <span class="label">Le site de l'entreprise: </span>
            {{$entreprise->url_site}}
        </div>
        <div class="description">
            <span class="label">Description: </span>
            {{$entreprise->description}}
        </div>
    </div>
</div>
<body>