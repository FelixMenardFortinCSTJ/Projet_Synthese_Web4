@extends('meslayouts.base')

@section('titre')
mrc
@endsection

@section('contenu')
<h1>Portrait de la région</h1>
<img src="{{asset('_assets/svg/Laurentides.svg')}}" alt="MapLaurentides">
@foreach ($mrcs as $mrc)
<div class="mrcs">
    <a href="{{ route('mrcs.show', $mrc) }}">
        <span class="nom">{{$mrc->nom}}</span>
    </a>
</div>

@endforeach
@endsection