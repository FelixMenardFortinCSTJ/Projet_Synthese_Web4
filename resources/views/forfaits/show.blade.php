@extends('meslayouts.base')

@section('titre')
Forfait
@endsection

@section('contenu')
    <div class="interface">
        <h1>{{$forfait->categorie_forfait}}</h1>
        <div class="Fiche">
            <h2>{{$forfait->nom_forfait}}</h2>
            <p>{{$forfait->description}}</p>
            <h3>prix</h3>
            <p>{{$forfait->prix}}</p>
            <form action="/savepanier" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="forfait_id" value="{{$forfait->id}}">
                <button>Ajouter au panier</button>
            </form>

        </div>
        <div class="Panier">
            <h1>Panier</h1>
            <img id="Fermer" class="Fermer" src="/public/_assets/svg/Fermer.svg" alt="Fermer">
            <div class="ProduitsPanier">
                <h2>{{$forfait->nom_forfait}}</h2>
                <p>{{$forfait->description}}</p>
                <div class="PrixPaniers">
                    <h3 class="prixPanier">prix :</h3>
                    <p class="prixPanier">{{$forfait->prix}}</p>
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
@endsection
<script src="/public/js/Panier.js"></script>
</body>
</html>
