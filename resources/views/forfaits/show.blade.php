@extends('meslayouts.base')

@section('titre')
Forfait
@endsection

@section('contenu')
<h1>Détails du forfait : {{$forfait->nom}}</h1>
<div class="detail">
    <div class="forfait">
        <div class="nom_forfait"><span class="label">Nom du forfait</span>{{$forfait->nom_forfait}}</div>
        <div class="description"><span class="label">Description</span>{{$forfait->description}}</div>
        <div class="prix"><span class="label">Prix</span>{{$forfait->prix}}</div>
    </div>
</div>
<div class="options">
    <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour à la liste</a>
    <a data-icon="edit" href="{{route('forfaits.edit', $forfait)}}">Modifier le forfait</a>
    <a data-icon="delete" href="{{route('forfaits.delete', $forfait)}}">Supprimer le forfait</a>
</div>
@endsection