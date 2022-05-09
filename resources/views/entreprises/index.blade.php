@extends('meslayouts.base')

@section('titre')
Entreprise
@endsection

@section('contenu')
<h1>Les entreprises</h1>
    <div class="tableau entreprises">
        @foreach($entreprises as $entreprise)
        <div class="entreprises">
            <a href="{{route('entreprises.show', $entreprise['id'])}}">
                <span class="logo"><img src="{{$entreprise->logo_etablissement}}" alt=""></span>
                <span class="nom">{{$entreprise->nom}}</span>
            </a>
        </div>
        @endforeach
    </div>
@endsection
