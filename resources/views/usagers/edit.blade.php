@extends('meslayouts.base')

@section('titre')
Profil
@endsection

@section('contenu')
<h1>Modifier le profil {{$usager->nom}}</h1>
<form action="{{route('usagers.update', $usager)}}" method="post">
    @include('usagers.form')
    <div>
        <button data-icon="done" type="submit">Modifier le profil</button>
    </div>
</form>
<div class="options">
    <button><a href="{{route('dashboard')}}">Annuler</a> </button>
</div>
@endsection
