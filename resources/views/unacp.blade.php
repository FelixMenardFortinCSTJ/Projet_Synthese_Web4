
@extends('meslayouts.base')

@section('titre')
Profil
@endsection

@section('contenu')


<div class="header">
    <h1>
        Nom de la personne
    </h1>
</div>

<div class="laPersonne">
    <img src={{asset('_assets/jpg/ImageSab/personne6.jpg')}} alt="imgPersonne">

    <div class="infoPersonne">
        <h2>
            Quote?
        </h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus enim eligendi natus, deserunt ipsam animi.
        </p>
    </div>
</div>

@endsection

        
