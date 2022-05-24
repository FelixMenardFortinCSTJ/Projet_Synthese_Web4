@extends('meslayouts.base')

@section('titre')
Forfait
@endsection

@section('contenu')
<h1>Forfaits</h1>
<a href="{{route('forfaits.categorie.show', 'Escapade')}}">Escapade</a>
<a href="{{route('forfaits.categorie.show', 'Famille')}}">Famille</a>
<a href="{{route('forfaits.categorie.show', 'Découverte')}}">Découverte</a>
<a href="{{route('forfaits.categorie.show', 'Détente')}}">Détente</a>
@foreach($forfaits as $forfait)
<div class="forfait">
    <a href="{{route('forfaits.show', $forfait['id'])}}">
        <span class="nom_forfait">{{$forfait->nom_forfait}}</span>
        <span class="description">{{$forfait->description}}</span>
        <span class="prix">{{$forfait->prix}}</span>
    </a>
</div>
@endforeach
@endsection