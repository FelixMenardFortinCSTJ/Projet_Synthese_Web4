@extends('meslayouts.base')

@section('titre')
Tableau de bord admin
@endsection

@section('contenu')
<div class="HideLaravel"></div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profil') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- ///////////PROFIL///////////// -->
                    <!-- <h1>Profil</h1> -->
                    <div class="Infos">
                        <div class="nom">
                            <h3>Nom : </h3>
                            <p>{{$usager->nom}}</p>
                        </div>
                        <div class="prenom">
                            <h3>Prenom : </h3>
                            <p>prenom</p>
                        </div>
                        <div class="Courriel">
                            <h3>Adresse courriel : </h3>
                            <p>{{$usager->courriel}}</p>
                        </div>
                        <div class="Adresse">
                            <h3>Adresse complète : </h3>
                            <p>code_civique</p>
                        </div>
                        <div class="Telephone">
                            <h3>Numéro de téléphone : </h3>
                            <p>Telephone</p>
                        </div>
                       <div class="Bouton">
                            <button><a href="{{route('usagers.show', $usager['id'])}}">Modifier</a></button>
                            <button><a href="{{route('usagers.delete', $usager['id'])}}">Delete</a></button>
                       </div>
                    </div>

                    @foreach ($paiements as $paiement)
                    @if (Auth::user()->id == $paiement->user_id)
                        <div class="Carte">
                            <h2>Carte</h2>
                            <div class="NomCarte">
                                <h3>Titulaire :</h3>
                                <p>{{ $paiement->titulaire }}</p>
                            </div>
                            <div class="NumeroCarte">
                                <h3>Numéro de la carte :</h3>
                                <p> {{ $paiement->numero_carte }} </p>
                            </div>
                            <div class="Expiration">
                                <h3>Date d'expiration :</h3>
                                <p> {{ $paiement->date_expiration }} </p>
                            </div>
                            <div class="Securite">
                                <h3>Numéro de sécurité : </h3>
                                <p> {{ $paiement->code_securite }} </p>
                            </div>
                            <div class="Bouton">
                                <button><a href="{{route('paiements.show', $paiement['id'])}}">Modifier</a></button>
                                <button><a href="{{route('paiements.delete', $paiement['id'])}}">Delete</a></button>
                            </div>
                        </div>
                    @endif
                    @endforeach

                    <div class="Favoris">
                        <h2>Favoris</h2>
                        <div class="Favori">
                            @foreach ($favoris as $favori)
                            @if (Auth::user()->id == $favori->user_id)
                            <div class="favori">
                                <h2>{{ $favori->entreprise->nom }}</h2> 
                                <p>{{ $favori->entreprise->ville }} {{ $favori->entreprise->adresse }}</p>
                            </div>
                            @endif
                            @endforeach
                            <button>Afficher plus</button>
                        </div>
                    </div>
                <!-- <div class="Transactions">
                    <div class="Transaction">
                        <p>Forfait acheté</p>
                        <p>prix$</p>
                        <p>numéro de commande</p>
                        <button>Accéder à la facture</button>
                    </div>
                    <button>Afficher plus</button>
                </div> -->
                <!-- ////////ADMIN//////// -->
                @if(Auth::user()->role >5)
                <a href="{{route('admin.evenements.index')}}">Les évènements</a>
                <a href="{{route('admin.entreprises.index')}}">Voir les entreprises</a>
                <!-- Route activité manquante -->
                @endif
                    <!-- //////////////////////// -->
                </div>
            </div>
            {{-- Section panier --}}
            <div class="Transactions">
                <h2>Panier</h2>
                @foreach ($paniers as $panier)
                    @if (Auth::user()->id == $panier->user_id)
                        <p>
                            {{-- @dd($panier) --}}
                            <h2>{{ $panier->forfait->nom_forfait }}</h2> - {{ $panier->forfait->categorie_forfait }}
                            {{ $panier->forfait->prix }}$
                        </p>
                        @endif
                        @endforeach
                        <div class="Bouton">
                            <button><a href="{{route('paniers.edit', $panier['id'])}}">Modifier</a></button>
                        </div>
            </div>
            {{-- //////////////////////////////////////////////////// --}}
        </div>
    </div>
</x-app-layout>
@endsection
