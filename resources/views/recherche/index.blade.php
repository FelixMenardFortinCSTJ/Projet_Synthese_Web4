@extends('meslayouts.base')

@section('titre')
Resultat
@endsection

@section('contenu')
<h1>Les resultats</h1>
    <div class="tableau resultats">
        @foreach($resultats as $resultat)
        <div class="resultats">
            <a href="{{--route('resultats.show', $resultat['id'])--}}">
                <span class="nom">{{$resultat->nom}}</span>
            </a>
        </div>
        @endforeach
    </div>
@endsection
