@extends('meslayouts.base')

@section('titre')
Evenement
@endsection

@section('contenu')
<form action="{{route('evenements.index')}}" method="post">
    @include('evenements.form')
    <div>
        <button type="submit">Supprimer</button>
    </div>
</form>
@endsection

