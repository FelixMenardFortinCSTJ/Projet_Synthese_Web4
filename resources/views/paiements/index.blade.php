@extends('meslayouts.base')

@section('titre')
Paiement
@endsection

@section('contenu')
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
@endsection
