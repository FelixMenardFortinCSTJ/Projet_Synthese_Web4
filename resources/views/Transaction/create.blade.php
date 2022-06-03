@extends('meslayouts.base')

@section('titre')
Transactions
@endsection

@section('contenu')
<h1>Créer une transaction</h1>
<form action="{{route('transactions.store')}}" method="post">
    @include('transactions.form')
    <div>
        <button data-icon="done" type="submit">Créer une transaction</button>
    </div>
</form>
@endsection