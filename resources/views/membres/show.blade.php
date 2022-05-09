<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Détails du membre : {{$membre->nom_evenement}}</h1>
<div class="detail">
    <div class="membre">
        <div class="logo"><img src="{{$membre->logo_etablissement}}" alt=""></div>
        <div class="nom_evenement">
            <span class="label">nom_evenement</span>
            {{$membre->nom_evenement}}
        </div>
        <div class="courriel">
            <span class="label">courriel</span>
            {{$membre->courriel}}
        </div>
        <div class="telephone">
            <span class="label">telephone</span>
            {{$membre->telephone}}
        </div>
        <div class="site_web">
            <span class="label">site_web</span>
            {{$membre->site_web}}
        </div>
        <div class="description">
            <span class="label">{{$membre->description}}</span>
            {{$membre->description}}
        </div>
    </div>
</div>
<div class="options">
    <a data-icon="calendar_view_month" href="{{route('membres.index')}}">Retour à la liste</a>
    <a data-icon="edit" href="{{route('membres.edit', $membre)}}">Modifier la molécule</a>
    <a data-icon="delete" href="{{route('membres.delete', $membre)}}">Supprimer la molécule</a>
</div>
<body>