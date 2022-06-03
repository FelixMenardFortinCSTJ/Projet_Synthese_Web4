@extends('meslayouts.base')

@section('titre')
mrc
@endsection

@section('contenu')
<h1>MRC</h1>
@foreach ($mrcs as $mrc)
<div class="mrcs">
    <a href="{{ route('mrcs.show', $mrc) }}">
        <span class="nom">{{$mrc->nom}}</span>
    </a>
</div>
@endforeach
@endsection