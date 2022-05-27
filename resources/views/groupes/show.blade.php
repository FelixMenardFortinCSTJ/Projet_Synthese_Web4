@extends('meslayouts.base')

@section('titre')
Entreprise
@endsection

@section('contenu')
<h1>Détails du groupe : {{$groupe->nom}}</h1>
<div class="detail">
    <div class="categorie">
        <div class="nom">
            @include("categories.listeCategorie", ['categories'=>$groupe->categories])
        </div>
    </div>
</div>
@endsection
