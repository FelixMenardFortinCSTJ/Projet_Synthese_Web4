@extends('meslayouts.base')

@section('titre')
Evenement
@endsection

@section('contenu')
<form action="{{route('paiements.destroy', $paiement)}}" method="post">
    @include('paiements.form')
    <div>
        <button type="submit">Supprimer</button>
    </div>
</form>
@endsection
