@extends('meslayouts.base')

@section('titre')
Profil
@endsection

@section('contenu')
<h1>Créer un profil</h1>
<form action="{{route('usagers.store')}}" method="post">
    @include('usagers.form')
    <div>
        <button data-icon="done" type="submit">Créer un profil</button>
    </div>
</form>
@endsection