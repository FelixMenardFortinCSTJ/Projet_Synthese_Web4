@extends('meslayouts.base')

@section('titre')
Entreprise
@endsection

@section('contenu')
<h1>Supprimer l'entreprise {{$entreprise->nom}} ?</h1>
<form action="{{route('entreprises.destroy', $entreprise)}}" method="post">
    @csrf
    <div>
        <button data-icon="done" type="submit" name="delete">Supprimer l'entreprise</button>
    </div>
</form>
<div class="options">
    <a data-icon="calendar_view_month" href="{{route('entreprises.index')}}">Retour à la liste</a>
    <a data-icon="visibility" href="{{route('entreprises.show', $entreprise)}}">Retour à l'entreprise</a>
    <a data-icon="edit" href="{{route('entreprises.edit', $entreprise)}}">Modifier l'entreprise</a>
</div>
@endsection

