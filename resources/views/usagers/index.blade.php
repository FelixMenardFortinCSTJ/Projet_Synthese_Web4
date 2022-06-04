@extends('meslayouts.base')

@section('titre')
Profil
@endsection

@section('contenu')
<h1>Profil</h1>
@foreach($usagers as $usager)
<div class="usager">
    <a href="{{route('usagers.show', $usager['id'])}}">
        <span class="prenom">{{$usager->prenom}}</span>
        <span class="nom">{{$usager->nom}}</span>
        <span class="courriel">{{$usager->courriel}}</span>
        <span class="adresse">{{$usager->adresse_civique}}</span>
        <span class="ville">{{$usager->ville}}</span>
        <span class="code_postal">{{$usager->code_postal}}</span>
        <span class="telephone">Masse: {{$usager->telephone}}</span>
        <span class="mot_de_passe">{{$usager->mot_de_passe}}</span>
    </a>
</div>
<div class="options">
    <button><a data-icon="edit" href="{{route('usagers.edit', $usager)}}">Modifier</a></button>
    <button><a href="{{route('dashboard')}}">Retour</a> </button>
</div>
@endforeach
@endsection

