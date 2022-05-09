@extends('meslayouts.base')

@section('titre')
Entreprise
@endsection

@section('contenu')
<form action="{{route('entreprises.store')}}" method="post">
    @include('entreprises.form')
    <div>
        <button type="submit">Ajouter</button>
    </div>
</form>
@endsection
