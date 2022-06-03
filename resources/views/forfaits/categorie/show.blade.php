@extends('meslayouts.base')

@section('titre')
Forfait
@endsection

@section('contenu')
<div class="interface">
    <h1>Forfaits</h1>
    <a href="{{route('forfaits.categorie.show', 'Escapade')}}">Escapade</a>
    <a href="{{route('forfaits.categorie.show', 'Famille')}}">Famille</a>
    <a href="{{route('forfaits.categorie.show', 'Découverte')}}">Découverte</a>
    <a href="{{route('forfaits.categorie.show', 'Détente')}}">Détente</a>
    @foreach($forfaits as $forfait)
    <div class="forfait">
        <div class="Standard">
            <div class="InfosForfaits">
                <a href="{{route('forfaits.show', $forfait['id'])}}"></a>
                <span class="prix">{{$forfait->prix}}$</span>
                <h2><span class="nom_forfait">{{$forfait->nom_forfait}}</span></h2>
                <p><span class="description">{{$forfait->description}}</span></p>
                <a href="{{route('forfaits.show', $forfait['id'])}}"><button>En savoir plus</button></a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection