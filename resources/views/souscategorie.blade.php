@extends('meslayouts.base')

@section('titre')
Profil
@endsection

@section('contenu')


<div class="header">
    <h1>
        Sous Catégorie
    </h1>
    <p>
        Integer ac molestie orci, non maximus orci. Etiam sit amet rhoncus lorem. Phasellus sed commodo nisl. Fusce gravida arcu non dignissim mollis. Integer iaculis ut lectus luctus blandit. Curabitur lacus velit, convallis vitae vehicula eu, luctus id metus. Duis auctor sem justo, et lobortis sem accumsan vitae.
    </p>
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
        <img src={{asset('_assets/jpg/ImageSab/imgSab1.jpg')}} alt="Activite">
        <h3>
            Nom de l'Activite
        </h3>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, minus.
        </p>
    </div>


    <div class="activite">
        <img src={{asset('_assets/jpg/ImageSab/imgSab2.jpg')}} alt="Activite">
        <h3>
            Nom de l'Activite
        </h3>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, minus.
        </p>
    </div>


    <div class="activite">
        <img src={{asset('_assets/jpg/ImageSab/imgSab3.jpg')}} alt="Activite">
        <h3>
            Nom de l'Activite
        </h3>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, minus.
        </p>
    </div>


    <div class="activite">
        <img src={{asset('_assets/jpg/ImageSab/imgSab4.jpg')}} alt="Activite">
        <h3>
            Nom de l'Activite
        </h3>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, minus.
        </p>
    </div>

</div>

@endsection