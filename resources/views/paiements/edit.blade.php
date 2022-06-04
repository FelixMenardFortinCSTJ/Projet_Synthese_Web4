@extends('meslayouts.base')

@section('titre')
Paiement
@endsection

@section('contenu')
<form action="{{route('paiements.update', $paiement)}}" method="post">
    @include('paiements.form')
    <div>
        <button type="submit">Modifier</button>
        <button><a href="{{route('dashboard')}}">Annuler</a> </button>
    </div>
</form>
@endsection
