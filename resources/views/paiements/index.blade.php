<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Les paiements</h1>
    <div class="tableau paiements">
        @foreach($paiements as $paiement)
        <div class="paiement">
            <a href="{{route('paiements.show', $paiement)}}">
                <span class="logo"><img src="{{$paiement->titulaire}}" alt=""></span>
                <span class="numero_carte">{{$paiement->numero_carte}}</span>
            </a>
        </div>
        @endforeach
    </div>
<body>