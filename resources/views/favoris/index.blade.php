@extends('meslayouts.base')

@section('titre')
Evenement
@endsection

@section('contenu')
<form action="{{route('paniers.update', $panier)}}" method="post">
    <div>
    @if (Auth::user()->id == $panier->user_id)
    <p>
                            {{-- @dd($panier) --}}
                            <h2>{{ $panier->forfait->nom_forfait }}</h2> - {{ $panier->forfait->categorie_forfait }}
                            {{ $panier->forfait->prix }}$
                        </p>
    @endif
        <button type="submit"> Modifier le panier</button>
    </div>1
</form>
@endsection

 