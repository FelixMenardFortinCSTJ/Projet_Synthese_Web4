@extends('meslayouts.base')

@section('titre')
Entreprise
@endsection

@section('contenu')

@foreach ($categories as $categorie)
    <h1>Détails de la categorie : {{$categorie->nom}}</h1>
    <div class="detail">
        <div class="categorie">
            <div class="nom">
                @include("entreprises.liste", ['entreprises'=>$categorie->entreprises])
            </div>
        </div>
    </div>
@endforeach

@endsection
