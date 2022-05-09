@extends('meslayouts.base')

@section('titre')
Profil
@endsection

@section('contenu')
<h1>Modifier le profil {{$usager->nom}}</h1>
<form action="{{route('usagers.update', $usager)}}" method="post">
    @include('usagers.form')
    <div>
        <button data-icon="done" type="submit">Modifier le profil</button>
    </div>
</form>
<div class="options">
    <a data-icon="calendar_view_month" href="{{route('usagers.index')}}">Retour à la liste</a>
    <a data-icon="visibility" href="{{route('usagers.show', $usager)}}">Retour au profil</a>
    <a data-icon="delete" href="{{route('usagers.delete', $usager)}}">Supprimer le profil</a>
</div>
@endsection