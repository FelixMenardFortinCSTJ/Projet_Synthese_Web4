<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
    <a data-icon="edit" href="{{route('paiements.edit', $paiement)}}">Modifier la molécule</a>
    <a data-icon="delete" href="{{route('paiements.delete', $paiement)}}">Supprimer la molécule</a>
</div>
<body>