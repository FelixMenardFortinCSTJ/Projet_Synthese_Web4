@extends('meslayouts.base')

@section('titre')
Evenement
@endsection

@section('contenu')
<form action="{{route('paniers.destroy', $panier)}}" method="post">
    @include('paniers.form')
    <div>
        <button type="submit">Supprimer</button>
    </div>
</form>
@endsection

