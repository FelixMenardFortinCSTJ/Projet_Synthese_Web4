@extends('meslayouts.base')

@section('titre')
mrc
@endsection

@section('contenu')
<h1>Portrait de la région</h1>
<div class="MapLaurentides">
    <img src="{{asset('_assets/svg/Laurentides.svg')}}" alt="MapLaurentides">
</div>
@foreach ($mrcs as $mrc)
<div class="mrcs">
    <a href="{{ route('mrcs.show', $mrc) }}">
        <span class="nom">{{$mrc->nom}}</span>
    </a>
</div>

@endforeach
<div class="padRegion"></div>
@endsection

