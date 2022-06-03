@extends('meslayouts.base')

@section('titre')
Transaction
@endsection

@section('contenu')
<h1>Détails de la transaction : {{$transaction->numero_commande}}</h1>
<div>
    <label for="nom">Numéro de la transaction:</label>
    <span>{{$transaction->numero_commande}}</span>
</div>
<div>
    <label for="date">facture</label>
    <span>{{$transaction->facture}}</span>
</div>
<div>
    <a data-icon="edit" href="/transactions/{{$transaction->id}}/edit">Modifier la transaction</a>
</div>
@endsection