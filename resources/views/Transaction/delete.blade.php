@extends('meslayouts.base')

@section('titre')
Transaction
@endsection

@section('contenu')
<form action="{{route('transactions.index')}}" method="post">
    @include('transactions.form')
    <div>
        <button type="submit">Supprimer</button>
    </div>
</form>
@endsection