@extends('meslayouts.base')

@section('titre')
mrc
@endsection

@section('contenu')
<div class="nom">{{ $mrc->nom }}</div>
<div class="desccription">{{ $mrc->description }}</div>

@endsection