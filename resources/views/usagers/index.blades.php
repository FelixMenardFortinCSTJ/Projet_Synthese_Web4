@extends('meslayouts.base')

@section('titre')
Profil
@endsection

@section('contenu')
<h1>Profil</h1>
<div class="options">
    <a data-icon="add_circle" href="{{route('usagers.edit')}}">Modifier le Profil</a>
</div>
<div class="usager">
    <a href="{{route('usagers.show', $usager)}}">
        <span class="prenom">{{$usager->prenom_usager}}</span>
        <span class="nom">{{$usager->nom_usager}}</span>
        <span class="courriel">{{$usager->courriel}}</span>
        <span class="adresse">{{$usager->adresse_civique}}</span>
        <span class="ville">{{$usager->ville}}</span>
        <span class="code_postal">{{$usager->code_postal}}</span>
        <span class="telephone">Masse: {{$usager->telephone}}</span>
        <span class="mot_de_passe">{{$usager->mot_de_passe}}</span>
    </a>
</div>
@endsection


