@extends('meslayouts.base')

@section('titre')
Entreprise
@endsection

@section('contenu')
<form action="{{route('entreprises.update', $entreprise)}}" method="post">
    @include('entreprises.form')
    <div>
        <button type="submit">Modifier</button>
        <button><a href="{{route('entreprises.index')}}">Annuler</a> </button>
    </div>
</form>
@endsection

