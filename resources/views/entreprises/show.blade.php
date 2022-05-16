@extends('meslayouts.base')

@section('titre')
Entreprise
@endsection

@section('contenu')
<h1>Détails de l'entreprise : {{$entreprise->nom}}</h1>
<div class="detail">
    <div class="entreprise">
        <div class="logo"><img src="{{$entreprise->logo_etablissement}}" alt=""></div>
        <div class="nom">
            <span class="label">nom: </span>
            {{$entreprise->nom}}
        </div>
        <div class="adresse">
            <span class="label">adresse: </span>
            {{$entreprise->adresse}}
        </div>
        <div class="ville">
            <span class="label">ville: </span>
            {{$entreprise->ville}}
        </div>
        <div class="code_postal">
            <span class="label">code_postal: </span>
            {{$entreprise->codepostal}}
        </div>
        <div class="telephone">
            <span class="label">telephone: </span>
            {{$entreprise->telephone}}
        </div>
        <div class="url_photo">
            <span class="label">La Photo de l'entreprise: </span>
            {{$entreprise->url_photo}}
        </div>
        <div class="url_logo">
            <span class="label">Le logo de l'entreprise: </span>
            {{$entreprise->url_logo}}
        </div>
        <div class="url_site">
            <span class="label">Le site de l'entreprise: </span>
            {{$entreprise->url_site}}
        </div>
        <div class="description">
            <span class="label">Description: </span>
            {{$entreprise->description}}
        </div>
    </div>
</div>
@endsection
