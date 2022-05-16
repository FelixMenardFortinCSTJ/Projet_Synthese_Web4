@extends('meslayouts.base')

@section('titre')
Tableau de bord admin
@endsection

@section('contenu')
<div class="interface">
        <h1>Tableau de bord</h1>
        <div class="GestionDeMembre">
            <h2>Gestion d'un membre</h2>
            <button><a href="{{route('entreprises.index')}}"></a>ajouter un membre</button>
            <button>modifier un membre</button>
            <button>supprimer un membre</button>
            
        </div>
        <div class="GestionActivitées">
            <h2>Gestion des activités populaires</h2>
            <button>Ajouter une activité</button>
            <button>Supprimer une activité</button>
        </div>
        <div class="ActionsRapides">
            <h2>actions rapides Activités populaires</h2>
            <button>Ajouter</button>
            <button>Supprimer</button>
        </div>
        <div class="GestionEvenements">
            <h2>Gestion des événements</h2>
            <button>ajouter un événement</button>
            <button>modifier un événement</button>
            <button>supprimer un événement</button>
        </div>
        <div class="GestionForfaits">
            <h2>Gestion des forfaits</h2>
            <button>ajouter un forfait</button>
            <button>modifier un forfait</button>
            <button>supprimer un forfait</button>
        </div>
    </div>
@endsection