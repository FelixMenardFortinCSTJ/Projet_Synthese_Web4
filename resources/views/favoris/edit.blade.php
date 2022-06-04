@extends('meslayouts.base')

@section('titre')
Evenement
@endsection

@section('contenu')
<h1>Modifier le favori {{$favori->nom}}</h1>
<form action="{{route('favoris.update', $favori)}}" method="post">
@include('favoris.form')
    <div>
        <button data-icon="done" type="submit">Modifier le favori</button>
    </div>
</form>
<div class="options">
    <a data-icon="calendar_view_month" href="/accueil">Retour à la liste</a>
    <a data-icon="visibility" href="{{route('favoris.show', $favori)}}">Retour au favori</a>
    <a data-icon="delete" href="{{route('favoris.delete', $favori)}}">Supprimer le favori</a>
</div>
@endsection

