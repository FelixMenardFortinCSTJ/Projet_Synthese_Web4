@extends('meslayouts.base')

@section('titre')
Evenement
@endsection

@section('contenu')
<h1>Détails de l'événement : {{$evenement->nom}}</h1>
<div>
    <label for="nom">Nom de l'événement</label>
    <span>{{$evenement->nom_evenements}}</span>
</div>
<div>
    <label for="date">Date de l'événement</label>
    <span>{{$evenement->dates}}</span>
</div>
<div>
    <label for="description">Description de l'événement</label>
    <span>{{$evenement->description}}</span></div>
<div>
    <label for="ville">Ville de l'événement</label>
    <span>{{$evenement->ville}}</span></div>
<div>
    <label for="prix">Prix de l'événement</label>
    <span>{{$evenement->prix}}</span></body>
<div>
    <a data-icon="edit" href="/evenements/{{$evenement->id}}/edit">Modifier l'événement</a>
</div>
@endsection


