@extends('meslayouts.base')

@section('titre')
Entreprise
@endsection

@section('contenu')
<h1>Détails de la categorie : {{$categorie->nom}}</h1>
<div class="detail">
    <div class="categorie">
        <div class="nom">
            <span class="label">nom: </span>
            @include("entreprises.liste", ['entreprises'=>$categorie->entreprises])
        </div>
    </div>
</div>
@endsection
