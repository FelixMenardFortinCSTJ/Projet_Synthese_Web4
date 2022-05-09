@extends('meslayouts.base')

@section('titre')
Evenement
@endsection

@section('contenu')
<form action="{{route('evenements.update', $evenement)}}" method="post">
    @include('evenements.form')
    <div>
        <button type="submit"> Modifier l'événement</button>
    </div>
</form>
@endsection

 