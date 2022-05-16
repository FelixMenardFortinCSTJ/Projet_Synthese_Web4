@extends('meslayouts.base')

@section('titre')
Evenement
@endsection

@section('contenu')
<h1>Les évenements</h1>
<div class="tableau">
    @foreach($evenements as $evenement)
    <div class="evenements">
        <a href="{{route('evenements.show', $evenement['id'])}}">
            <span class="image"><img src="{{$evenement->image_url}}" alt=""></span>
            <span class="nom_evenements">{{$evenement->nom_evenements}}</span>
        </a>
    </div>
    @endforeach
</div>  
@endsection

  
