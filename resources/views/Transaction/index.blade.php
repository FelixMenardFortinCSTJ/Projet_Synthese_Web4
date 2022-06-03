@extends('meslayouts.base')

@section('titre')
Transaction
@endsection

@section('contenu')
<h1>Les transactions</h1>
<div class="tableau">
    @foreach($transactions as $transaction)
    <div class="transactions">
        <a href="{{route('transactions.show', $transaction['id'])}}">
            <span class="image"><img src="{{$transaction->image_url}}" alt=""></span>
            <span class="nom_transactions">{{$transaction->nom_transactions}}</span>
        </a>
    </div>
    @endforeach
</div>  
@endsection
