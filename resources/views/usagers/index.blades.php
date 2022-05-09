@extends('meslayouts.usager')

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
        <span class="nom">{{$usager->nom_usager}}</span>
        <span class="courriel">{{$usager->courriel}}</span>
        <span class="adresse">{{$usager->adresse_civique}}</span>
        <span class="telephone">Masse: {{$usager->telephone}}</span>
    </a>
</div>
@endsection


