<h2>Catégories</h2>
@foreach($categories as $categorie)
<ul>
    <li>
        <!-- {{$categorie->nom}} -->
        @include("categories.listeCategorie", ['entreprises'=>$categorie->entreprises])
    </li>
</ul>
@endforeach