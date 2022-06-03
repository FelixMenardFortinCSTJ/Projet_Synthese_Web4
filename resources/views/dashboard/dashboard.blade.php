@extends('meslayouts.base')

@section('titre')
Tableau de bord admin
@endsection

@section('contenu')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- ///////////PROFIL///////////// -->
                    <h1>Profil</h1>
                    <div class="Infos">
                        <div class="nom">
                            <h3>Nom : </h3>
                            <p>nom</p>
                        </div>
                        <div class="prenom">
                            <h3>Prenom : </h3>
                            <p>prenom</p>
                        </div>
                        <div class="Courriel">
                            <h3>Adresse courriel : </h3>
                            <p>Adresse courriel</p>
                        </div>
                        <div class="Adresse">
                            <h3>Adresse complète : </h3>
                            <p>code_civique</p>
                        </div>
                        <div class="Telephone">
                            <h3>Numéro de téléphone : </h3>
                            <p>Telephone</p>
                        </div>
                    </div>
                    <div class="Carte">
                    <h2>Carte</h2>
                    <div class="NomCarte">
                        <h3>Nom de la carte : </h3>
                        <p>titulaire</p>
                    </div>
                    <div class="NumeroCarte">
                        <h3>Numéro de la carte : </h3>
                        <p>numero_carte</p>
                    </div>
                    <div class="Expiration">
                        <h3>Date d'expiration : </h3>
                        <p>date_expiration</p>
                    </div>
                    <div class="Securite">
                        <h3>Numéro de sécurité : </h3>
                        <p>code_securite</p>
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
                    <!-- ////////ADMIN//////// -->
                    @if(Auth::user()->role >5)
                    <a href="{{route('admin.evenements.index')}}">Les évènements</a>
                    <a href="{{route('admin.entreprises.index')}}">Voir les entreprises</a>
                    <!-- Route activité manquante -->
                    @endif
                    <!-- //////////////////////// -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
