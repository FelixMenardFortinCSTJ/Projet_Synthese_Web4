@extends('meslayouts.base')

@section('titre')
Paiement
@endsection

@section('contenu')
<form action="{{route(paiements.store)}}" method="post">
    @include('paiements.form')
    <div>
        <button type="submit">Ajouter</button>
    </div>
</form>
@endsection

