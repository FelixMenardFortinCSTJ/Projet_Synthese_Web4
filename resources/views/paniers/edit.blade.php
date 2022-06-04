@extends('meslayouts.base')

@section('titre')
Evenement
@endsection

@section('contenu')
<h1>Modifier le panier {{$panier->nom}}</h1>
<form action="{{route('paniers.update', $panier)}}" method="post">
@include('paniers.form')
    <div>
        <button data-icon="done" type="submit">Modifier le panier</button>
    </div>
</form>
<div class="options">
    <a data-icon="calendar_view_month" href="/accueil">Retour à la liste</a>
    <a data-icon="visibility" href="{{route('paniers.show', $panier)}}">Retour au panier</a>
    <a data-icon="delete" href="{{route('paniers.delete', $panier)}}">Supprimer le panier</a>
</div>
@endsection

 