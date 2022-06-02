@extends('meslayouts.base')

@section('titre')
Forfait
@endsection

@section('contenu')
<div class="interface">
    <h1>Forfaits</h1>
    <div class="pad"></div>
    <div class="Escapade">
        <h2>Escapade</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In inventore tempore eveniet nam quibusdam nobis et placeat iure magni quia repellat, fuga dolorum, error odio debitis sit. Odit, et dolor?</p>
        <a href="{{route('forfaits.categorie.show', 'Escapade')}}"><button> En savoir plus</button></a>
    </div>

    <div class="Famille">
        <h2>Famille</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde iure autem ipsum quos excepturi dignissimos eum iste consequatur, dolores odit nemo omnis molestiae blanditiis. Ut, atque. Dignissimos provident minima quisquam.</p>
        <a href="{{route('forfaits.categorie.show', 'Famille')}}"><button> En savoir plus</button></a>
    </div>

    <div class="Decouverte">
        <h2>Découverte</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, impedit. Libero iste possimus ab repudiandae, ad aliquam id mollitia? Animi deserunt ipsam mollitia minima dolor delectus harum! Unde, accusantium incidunt?</p>
        <a href="{{route('forfaits.categorie.show', 'Découverte')}}"><button> En savoir plus</button></a>
    </div>

    <div class="Detente">
        <h2>Détente</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi blanditiis et est iure, exercitationem iusto accusantium? Voluptatem maiores doloremque assumenda quidem. Nostrum est repudiandae a accusamus. Aliquid suscipit qui nobis!</p>
        <a href="{{route('forfaits.categorie.show', 'Détente')}}"><button> En savoir plus</button></a>
    </div>
</div>
@endsection