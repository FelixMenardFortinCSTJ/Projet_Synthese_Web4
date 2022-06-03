@extends('meslayouts.base')

@section('titre')
Evenement
@endsection

@section('contenu')
<form action="{{route('paniers.update', $panier)}}" method="post">
    <div>

        <button type="submit"> Modifier le panier</button>
    </div>
</form>
@endsection

 