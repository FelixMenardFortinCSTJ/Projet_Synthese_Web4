@extends('meslayouts.base')

@section('titre')
Transaction
@endsection

@section('contenu')
<form action="{{route('transactions.update', $transaction)}}" method="post">
    @include('transactions.form')
    <div>
        <button type="submit"> Modifier la transaction</button>
    </div>
</form>
@endsection