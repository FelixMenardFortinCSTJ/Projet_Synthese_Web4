@extends('meslayouts.base')

@section('titre')
Forfait
@endsection

@section('contenu')
<h1>Forfait</h1>
<div class="options">
    <a data-icon="add_circle" href="{{route('forfaits.edit')}}">Modifier le forfait</a>
</div>
<div class="forfait">
    <a href="{{route('forfaits.show', $forfait)}}">
        <span class="nom_forfait">{{$forfait->nom_forfait}}</span>
        <span class="description">{{$forfait->description}}</span>
        <span class="prix">{{$forfait->prix}}</span>
    </a>
</div>
@endsection