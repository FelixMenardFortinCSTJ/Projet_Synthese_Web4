@extends('meslayouts.base')

@section('titre')
Profil
@endsection

@section('contenu')
<h1>Détails du profil : {{$usager->nom}}</h1>
<div class="detail">
    <div class="usager">
        <div class="prenom"><span class="label">Prenom</span>{{$usager->prenom_usager}}</div>
        <div class="nom"><span class="label">Nom</span>{{$usager->nom_usager}}</div>
        <div class="adresse_civique"><span class="label">Adresse civique</span>{{$usager->adresse_civique}}</div>
        <div class="ville"><span class="label">Ville</span>{{$usager->ville}}</div>
        <div class="code_postal"><span class="label">Code postal</span>{{$usager->code_postal}}</div>
        <div class="courriel"><span class="label">Adresse courriel</span>{{$usager->courriel}}</div>
        <div class="telephone"><span class="label">Numéro de téléphone</span>{{$usager->telephone}}</div>
        <div class="mot_de_passe"><span class="label">Mot de passe</span>{{$usager->mot_de_passe}}</div>
    </div>
</div>
<div class="options">
    <a data-icon="calendar_view_month" href="{{route('usagers.index')}}">Retour à la liste</a>
    <a data-icon="edit" href="{{route('usagers.edit', $usager)}}">Modifier le profil</a>
    <a data-icon="delete" href="{{route('usagers.delete', $usager)}}">Supprimer le profil</a>
</div>
@endsection