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
    <a data-icon="calendar_view_month" href="{{route('paiements.index')}}">Retour à la liste</a>
    <a data-icon="edit" href="{{route('paiements.edit', $paiement)}}">Modifier le mode de paiement</a>
    <a data-icon="delete" href="{{route('paiements.delete', $paiement)}}">Supprimer le mode de paiement</a>
</div>
@endsection
