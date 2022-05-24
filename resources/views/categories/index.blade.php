<h2>Catégories</h2>
@foreach($categories as $categorie)
<ul>
    <li>
        {{$categorie->nom}}
        @include("categories.liste", ['entreprises'=>$categorie->entreprises])
    </li>
</ul>
@endforeach