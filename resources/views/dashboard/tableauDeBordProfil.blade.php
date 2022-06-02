@extends('meslayouts.base')

@section('titre')
Tableau de bord admin
@endsection

@section('contenu')
<div class="interface">
        <h1>Profil</h1>
        <div class="Infos">
            <div class="nom">
                <h3>Nom : </h3>
                <p>Nom</p>
            </div>
            <div class="Courriel">
                <h3>Adresse courriel : </h3>
                <p>Adresse courriel</p>
            </div>
            <div class="Adresse">
                <h3>Adresse complète : </h3>
                <p>Adresse complète</p>
            </div>
            <div class="Telephone">
                <h3>Numéro de téléphone : </h3>
                <p>Numéro de téléphone</p>
            </div>
        </div>
        <div class="Carte">
            <h2>Carte</h2>
            <div class="NomCarte">
                <h3>Nom de la carte : </h3>
                <p>Nom de la carte</p>
            </div>
            <div class="NumeroCarte">
                <h3>Numéro de la carte : </h3>
                <p>Numéro de la carte</p>
            </div>
            <div class="Expiration">
                <h3>Date d'expiration : </h3>
                <p>Date d'expiration</p>
            </div>
            <div class="Securite">
                <h3>Numéro de sécurité : </h3>
                <p>Numéro de sécurité</p>
            </div>
        </div>
        <div class="Favoris">
            <h2>Favoris</h2>
            <div class="Favori">
                <img src="/_assets/svg/placeholder.svg" alt="commercant">
                <h2>Nom du commercant</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quibusdam eaque ullam corporis eos. Deserunt, sit perspiciatis voluptatum, libero, voluptatem ducimus facilis reprehenderit beatae molestiae nihil magni id consequuntur illum?</p>
                <button>Supprimer</button>
            </div>
            <button>Afficher plus</button>
        </div>
        <div class="Transactions">
            <h2>Transactions</h2>
            <div class="Transaction">
                <p>Forfait acheté</p>
                <p>prix$</p>
                <p>numéro de commande</p>
                <button>Accéder à la facture</button>
            </div>
            <button>Afficher plus</button>
        </div>
    </div>
@endsection