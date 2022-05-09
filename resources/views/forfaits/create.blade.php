@extends('meslayouts.base')

@section('titre')
Forfaits
@endsection

@section('contenu')
<h1>Créer un forfait</h1>
<form action="{{route('forfaits.store')}}" method="post">
    @include('forfaits.form')
    <div>
        <button data-icon="done" type="submit">Créer un forfait</button>
    </div>
</form>
@endsection