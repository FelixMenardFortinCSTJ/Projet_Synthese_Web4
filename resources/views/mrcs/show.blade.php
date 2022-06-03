@extends('meslayouts.base')

@section('titre')
mrc
@endsection

@section('contenu')
<div class="nom">{{ $mrc->nom }}</div>
<div class="desccription">{{ $mrc->description }}</div>
<div class="image"><img src="{{$mrc->svg}}" alt=""></div>
<!-- <div class="MapRegion">
            <img class="mapMRC" src="{{asset('_assets/svg/placeholder.svg')}}" alt="MapMRC">
        <div class="Reconnue">
            <h2>Notre région est reconnue pour</h2>
            <p>Insérer Cahier Contenu p.10-18</p>
            <p>Insérer Cahier Contenu p.10-18</p>
            <p>Insérer Cahier Contenu p.10-18</p>
            <p>Insérer Cahier Contenu p.10-18</p>
            <p>Insérer Cahier Contenu p.10-18</p>
        </div> -->

@endsection
