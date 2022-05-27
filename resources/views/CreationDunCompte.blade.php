@extends('meslayouts.base')

@section('titre')
Tableau de bord admin
@endsection

@section('contenu')
<div class="interface">
        <h1>Création de compte</h1>
        <form class="infos">
            <div class="prenom">
                <h3>Prénom</h3>
                <input type="text">
            </div>
            <div class="nom">
                <h3>Nom</h3>
                <input type="text">
            </div>
            <div class="adresse">
                <h3>Adresse civique</h3>
                <input type="text">
            </div>
            <div class="codePostal">
                <h3>Code postal</h3>
                <input type="text">
            </div>
            <div class="ville">
                <h3>Ville</h3>
                <input type="text">
            </div>
            <div class="telephone">
                <h3>Téléphone</h3>
                <input type="text">
            </div>
            <div class="courriel">
                <h3>Courriel</h3>
                <input type="text">
            </div>
            <div class="Mot de passe">
                <h3>Mot de passe</h3>
                <input type="text">
            </div>
            <div class="VerifierMotDePasse">
                <h3>Vérifier le Mot de passe</h3>
                <input type="text">
            </div>
            <button class="compte">Créer le compte</button>
            <a class="connection"href="">vous avez déjà un compte ? connectez-vous <span>ici</span></a>
        </form>
    </div>
@endsection