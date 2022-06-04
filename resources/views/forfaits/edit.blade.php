@extends('meslayouts.base')

@section('titre')
Forfait
@endsection

@section('contenu')
<h1>Modifier le forfait {{$forfait->nom}}</h1>
<form action="{{route('forfaits.update', $forfait)}}" method="post">
    @include('forfaits.form')
    <div>
        <button data-icon="done" type="submit">Modifier le forfait</button>
    </div>
</form>
<div class="options">
    <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour à la liste</a>
    <a data-icon="visibility" href="{{route('forfaits.show', $forfait)}}">Retour au forfait</a>
    <a data-icon="delete" href="{{route('forfaits.delete', $forfait)}}">Supprimer le forfait</a>
</div>
@endsection
