@extends('meslayouts.base')

@section('titre')
Tableau de bord admin
@endsection

@section('contenu')
<div class="interface">
        <h1>Nos forfaits</h1>
        <div class="Escapade">
            <h2>Forfaits escapade gourmande</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In inventore tempore eveniet nam quibusdam nobis et placeat iure magni quia repellat, fuga dolorum, error odio debitis sit. Odit, et dolor?</p>
            <button onclick="window.location.href='ForfaitsThematique.html'">En savoir plus</button>
        </div>
        <div class="Decouverte">
            <h2>Forfaits découverte</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, impedit. Libero iste possimus ab repudiandae, ad aliquam id mollitia? Animi deserunt ipsam mollitia minima dolor delectus harum! Unde, accusantium incidunt?</p>
            <button onclick="window.location.href='ForfaitsThematique.html'">En savoir plus</button>
        </div>
        <div class="Detente">
            <h2>Forfaits détente</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi blanditiis et est iure, exercitationem iusto accusantium? Voluptatem maiores doloremque assumenda quidem. Nostrum est repudiandae a accusamus. Aliquid suscipit qui nobis!</p>
            <button onclick="window.location.href='ForfaitsThematique.html'">En savoir plus</button>
        </div>
        <div class="Famille">
            <h2>Forfaits famille</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde iure autem ipsum quos excepturi dignissimos eum iste consequatur, dolores odit nemo omnis molestiae blanditiis. Ut, atque. Dignissimos provident minima quisquam.</p>
            <button onclick="window.location.href='ForfaitsThematique.html'">En savoir plus</button>
        </div>
</div>
@endsection