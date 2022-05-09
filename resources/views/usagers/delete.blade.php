@extends('meslayouts.base')

@section('titre')
Profil
@endsection

@section('contenu')
<h1>Supprimer le profil {{$usager->nom}} ?</h1>
<form action="{{route('usagers.destroy', $usager)}}" method="post">
    @csrf
    <div>
        <button data-icon="done" type="submit" name="delete">Supprimer le profil</button>
    </div>
</form>
<div class="options">
    <a data-icon="calendar_view_month" href="{{route('usagers.index')}}">Retour à la liste</a>
    <a data-icon="visibility" href="{{route('usagers.show', $usager)}}">Retour au profil</a>
    <a data-icon="edit" href="{{route('usagers.edit', $usager)}}">Modifier le profil</a>
</div>
@endsection