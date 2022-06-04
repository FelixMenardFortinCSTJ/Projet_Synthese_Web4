@extends('meslayouts.base')

@section('titre')
Profil
@endsection

@section('contenu')
<h1>Détails du profil : {{$usager->nom}}</h1>
<div class="detail">
    <div class="usager">
        <div class="prenom"><span class="label">Prenom</span>{{$usager->prenom}}</div>
        <div class="nom"><span class="label">Nom</span>{{$usager->nom}}</div>
        <div class="adresse_civique"><span class="label">Adresse civique</span>{{$usager->adresse_civique}}</div>
        <div class="ville"><span class="label">Ville</span>{{$usager->ville}}</div>
        <div class="code_postal"><span class="label">Code postal</span>{{$usager->code_postal}}</div>
        <div class="courriel"><span class="label">Adresse courriel</span>{{$usager->courriel}}</div>
        <div class="telephone"><span class="label">Numéro de téléphone</span>{{$usager->telephone}}</div>
        <div class="mot_de_passe"><span class="label">Mot de passe</span>{{$usager->mot_de_passe}}</div>
    </div>
</div>
<div class="options">
    <button><a data-icon="edit" href="{{route('usagers.edit', $usager)}}">Modifier</a></button>
    <button><a href="{{route('dashboard')}}">Retour</a> </button>
</div>
@endsection
