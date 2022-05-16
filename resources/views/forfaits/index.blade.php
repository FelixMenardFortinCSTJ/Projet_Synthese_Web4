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
@endsection