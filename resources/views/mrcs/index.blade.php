@extends('meslayouts.base')

@section('titre')
mrc
@endsection

@section('contenu')
<h1>MRC</h1>
<a href="{{route('mrcs.show', 'Les Laurentides')}}">Les Laurentides</a>
<a href="{{route('mrcs.show', 'Antoine-Labelle')}}">Antoine-Labelle</a>
<a href="{{route('mrcs.show', 'Thérèse-De Blainville')}}">Thérèse-De Blainville</a>
<a href="{{route('mrcs.show', 'Argenteuil')}}">Argenteuil</a>
<a href="{{route('mrcs.show', 'Deux-Montagne')}}">Deux-Montagne</a>
<a href="{{route('mrcs.show', 'Les Pays-den-Haut')}}">Les Pays-d'en-Haut</a>
<a href="{{route('mrcs.show', 'La Rivière-du-Nord')}}">La Rivière-du-Nord</a>
@endsection