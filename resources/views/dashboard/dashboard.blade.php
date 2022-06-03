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
                    <!-- ////////ADMIN//////// -->
                    @if(Auth::user()->role >5)
                    <a href="{{route('admin.evenements.index')}}">Les évènements</a>
                    <a href="{{route('admin.evenements.create')}}">Modifier évènements</a>
                    @endif
                    <!-- //////////////////////// -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
