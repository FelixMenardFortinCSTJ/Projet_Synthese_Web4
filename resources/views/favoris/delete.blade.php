@extends('meslayouts.base')

@section('titre')
Evenement
@endsection

@section('contenu')
<form action="{{route('favoris.destroy', $favori)}}" method="post">
    @include('favoris.form')
    <div>
        <button type="submit">Supprimer</button>
    </div>
</form>
@endsection

