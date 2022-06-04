@extends('meslayouts.base')

@section('titre')
mrc
@endsection

@section('contenu')
<div class="nom">{{ $mrc->nom }}</div>
<div class="desccription DescriptionMRC">{{ $mrc->description }}</div>
<div class="image"><img src="{{asset($mrc->svg)}}" alt=""></div>

@endsection
