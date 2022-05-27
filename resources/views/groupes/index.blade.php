@extends('meslayouts.base')

@section('titre')
Entreprise
@endsection

@section('contenu')
<h2>Groupes</h2>
@foreach($groupes as $groupe)
<ul>
    <li>
        {{$groupe->nom}}
        @include("categories.listeCategorie", ['categories'=>$groupe->categories])
    </li>
</ul>
@endforeach
@endsection