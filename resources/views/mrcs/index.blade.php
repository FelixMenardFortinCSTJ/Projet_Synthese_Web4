@extends('meslayouts.base')

@section('titre')
mrc
@endsection

@section('contenu')
<h1>Portrait de la région</h1>
<p class="IntroRegion">Donec sit amet nunc hendrerit, ullamcorper mauris ut, pharetra leo. Morbi elementum cursus lacinia. Donec euismod, lacus quis dapibus ornare, turpis metus bibendum massa, accumsan dignissim felis eros non mi. Quisque suscipit pulvinar ipsum vel molestie. Donec eros purus, maximus ut metus at, finibus euismod nunc.</p>
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