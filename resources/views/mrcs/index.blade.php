@extends('meslayouts.base')

@section('titre')
mrc
@endsection

@section('contenu')
<h1>MRC</h1>
<a href="{{route('mrcs.categorie.show', 'Les Laurentides')}}">Les Laurentides</a>
<a href="{{route('mrcs.categorie.show', 'Antoine-Labelle')}}">Antoine-Labelle</a>
<a href="{{route('mrcs.categorie.show', 'Thérèse-De Blainville')}}">Thérèse-De Blainville</a>
<a href="{{route('mrcs.categorie.show', 'Argenteuil')}}">Argenteuil</a>
<a href="{{route('mrcs.categorie.show', 'Deux-Montagne')}}">Deux-Montagne</a>
<a href="{{route('mrcs.categorie.show', 'Hors MRC(autochtones)')}}">Hors MRC(autochtones)</a>
<a href="{{route('mrcs.categorie.show', 'Les Pays-den-Haut')}}">Les Pays-d'en-Haut</a>
<a href="{{route('mrcs.categorie.show', 'Hors MRC')}}">Hors MRC</a>
<a href="{{route('mrcs.categorie.show', 'La Rivière-du-Nord')}}">La Rivière-du-Nord</a>
@endsection