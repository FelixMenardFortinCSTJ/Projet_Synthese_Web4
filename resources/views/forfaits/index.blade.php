@extends('meslayouts.base')

@section('titre')
Forfait
@endsection

@section('contenu')
<h1>Forfait</h1>
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