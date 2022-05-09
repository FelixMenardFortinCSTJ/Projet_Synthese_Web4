@extends('meslayouts.base')

@section('titre')
Forfait
@endsection

@section('contenu')
<h1>Supprimer le forfait {{$forfait->nom}} ?</h1>
<form action="{{route('forfaits.destroy', $forfait)}}" method="post">
    @csrf
    <div>
        <button data-icon="done" type="submit" name="delete">Supprimer le forfait</button>
    </div>
</form>
<div class="options">
    <a data-icon="calendar_view_month" href="{{route('forfaits.index')}}">Retour à la liste</a>
    <a data-icon="visibility" href="{{route('forfaits.show', $forfait)}}">Retour au forfaits</a>
    <a data-icon="edit" href="{{route('forfaits.edit', $forfait)}}">Modifier le forfait</a>
</div>
@endsection