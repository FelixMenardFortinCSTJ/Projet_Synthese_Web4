@extends('meslayouts.base')

@section('titre')
Paiement
@endsection

@section('contenu')
<form action="{{route('paiements.update', $membre)}}" method="post">
    @include('paiements.form')
    <div>
        <button type="submit">Modifier</button>
        <button><a href="{{route('paiements.index')}}">Annuler</a> </button>
    </div>
</form>
@endsection
