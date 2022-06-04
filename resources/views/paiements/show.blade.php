@extends('meslayouts.base')

@section('titre')
Paiement
@endsection

@section('contenu')
<h1>Détails du paiement : {{$paiement->titulaire}}</h1>
<div class="detail">
    <div class="paiement">
        <div class="logo"><img src="{{$paiement->titulaire}}" alt=""></div>
        <div class="numero_carte">
            <span class="label">numero_carte</span>
            {{$paiement->numero_carte}}
        </div>
        <div class="date_expiration">
            <span class="label">date_expiration</span>
            {{$paiement->date_expiration}}
        </div>
        <div class="code_securite">
            <span class="label">code_securite</span>
            {{$paiement->code_securite}}
        </div>
    </div>
</div>
<div class="options">
    <button><a data-icon="edit" href="{{route('paiements.edit', $paiement)}}">Modifier</a></button>
    <button><a href="{{route('dashboard')}}">Retour</a> </button>
</div>
@endsection
