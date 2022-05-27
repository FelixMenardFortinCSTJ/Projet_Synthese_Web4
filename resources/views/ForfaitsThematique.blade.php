@extends('meslayouts.base')

@section('titre')
Tableau de bord admin
@endsection

@section('contenu')
<div class="interface">
        <h1>Nom de la catégorie de forfait</h1>
        <div class="Solitaire">
            <div class="InfosForfaits">
                <h2>Forfait solitaire</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In inventore tempore eveniet nam quibusdam nobis et placeat iure magni quia repellat, fuga dolorum, error odio debitis sit. Odit, et dolor?</p>
                <button onclick="window.location.href='ForfaitsFiche.html'">En savoir plus</button>
            </div>
        </div>
        <div class="Standard">
            <div class="InfosForfaits">
                <h2>Forfait standard</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, impedit. Libero iste possimus ab repudiandae, ad aliquam id mollitia? Animi deserunt ipsam mollitia minima dolor delectus harum! Unde, accusantium incidunt?</p>
                <button onclick="window.location.href='ForfaitsFiche.html'">En savoir plus</button>
            </div>
        </div>
        <div class="Groupe">
            <div class="InfosForfaits">
                <h2>Forfait de groupe</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi blanditiis et est iure, exercitationem iusto accusantium? Voluptatem maiores doloremque assumenda quidem. Nostrum est repudiandae a accusamus. Aliquid suscipit qui nobis!</p>
                <button onclick="window.location.href='ForfaitsFiche.html'">En savoir plus</button>
            </div>
        </div>
</div>
@endsection