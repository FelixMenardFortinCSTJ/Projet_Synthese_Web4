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
<<<<<<< HEAD
            <h3 class="PrixForfait">prix :</h3>
            <p class="PrixForfait">{{$forfait->prix}}$</p>
            <button>Ajouter au panier</button>
            <button id="OpenPanier">Accéder au panier</button>
=======
            <h3>prix</h3>
            <p>{{$forfait->prix}}</p>
            <form action="/savepanier" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="forfait_id" value="{{$forfait->id}}">
                <button>Ajouter au panier</button>
            </form>

>>>>>>> abac88180114789474dd0512d8f1526f7f978c24
        </div>
        <div  class="Panier-close" id="Panier" >
            <h1>Panier</h1>
            <img id="Fermer" class="Fermer" src="{{asset('_assets/svg/Fermer.svg')}}" alt="Fermer">
            <div class="ProduitsPanier">
                <h2>{{$forfait->nom_forfait}}</h2>
                <p>{{$forfait->description}}</p>
                <div class="PrixPaniers">
                    <h3 class="prixPanier">prix :</h3>
                    <p class="prixPanier">{{$forfait->prix}}$</p>
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
                            <h3>Numéro :</h3>
                            <p>Numéro</p>
                        </div>
                        <div class="Expiration InfoCarte">
                            <h3>Date d'expiration :</h3>
                            <p>Date d'expiration</p>
                        </div>
                        <div class="Securite InfoCarte">
                            <h3>Sécurité :</h3>
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
<script src={{asset('js/Panier.js')}}></script>
</body>
</html>
