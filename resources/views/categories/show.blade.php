@extends('meslayouts.base')

@section('titre')
Entreprise
@endsection

@section('contenu')

<div class="header">
    <h1>Détails de la categorie : <br> {{$categorie->nom}}</h1>

</div>

<div class="publicites">
    <div class="publicite1">
        <h2>
            Publicité
        </h2>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, totam numquam dolorum corporis maiores voluptatibus.
        </p>
    </div>
    <div class="publicite2">
        <h2>
            Publicité
        </h2>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, totam numquam dolorum corporis maiores voluptatibus.
        </p>
    </div>
</div>



<div class="activites">
    <div class="activite">
        <p>
            @include("entreprises.liste", ['entreprises'=>$categorie->entreprises])
        </p>

    </div>
</div>


@endsection
