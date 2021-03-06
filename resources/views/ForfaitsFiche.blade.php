@extends('meslayouts.base')

@section('titre')
Tableau de bord admin
@endsection

@section('contenu')
<div class="interface">
        <h1>Nom de la catégorie de forfait</h1>
        <div class="Fiche">
            <h2>Nom du forfait</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto sint impedit beatae molestiae similique quidem, quis modi hic minus, optio at fugit eveniet. Soluta architecto nulla voluptatibus aspernatur, maxime sed.</p>
            <h3>prix</h3>
            <p>prix$</p>
            <button>Ajouter au panier</button>
        </div>
        <div class="Panier">
            <h1>Panier</h1>
            <img id="Fermer" class="Fermer" src="/public/_assets/svg/Fermer.svg" alt="Fermer">
            <div class="ProduitsPanier">
                <h2>Nom du produit ou forfait</h2>
                <p>Description du produit ou du forfait</p>
                <div class="PrixPaniers">
                    <h3 class="prixPanier">prix :</h3>
                    <p class="prixPanier">prix$</p>
                    <button>Supprimer</button>
                </div>
                </div class="Paiement">
                    <div class="Methode">
                        <p>méthode de paiement</p>
                        <input type="text">
                    </div>
                    <div class="InfosCarte">
                        <div class="NomCarte InfoCarte">
                            <h3>Nom :</h3>
                            <p>Nom</p>
                        </div>
                        <div class="NumeroCarte InfoCarte">
                            <h3>Numéro: </h3>
                            <p>Numéro</p>
                        </div>
                        <div class="Expiration InfoCarte">
                            <h3>Date d'expiration : </h3>
                            <p>Date d'expiration</p>
                        </div>
                        <div class="Securite InfoCarte">
                            <h3>Sécurité : </h3>
                            <p>Sécurité</p>
                            <div class="Rappelers">
                                <button>modifier</button>
                                <p class="SeRappeler">se souvenir des informations</p>
                                <input type="checkbox">
                            </div>
                        </div>
                    </div>
                <button class="AcheterPanier">Acheter</button>
            </div>
        </div>
</div>
<script src="public/js/Panier.js"></script>
@endsection