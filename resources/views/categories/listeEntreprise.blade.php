@foreach($categories as $categorie)
<ul>
    <li>
        {{$categorie->nom}} ({{$categorie->groupe->nom}})
        @include('entreprises.liste', ['entreprises'=>$categorie->entreprises])
    </li>
</ul>
@endforeach