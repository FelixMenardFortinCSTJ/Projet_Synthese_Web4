@foreach($categories as $categorie)
<ul>
    <li>
        <a href="{{route('categories.show', $categorie)}}">
        {{$categorie->nom}} 
        <!-- ({{$categorie->groupe->nom}}) -->
    </li>
</ul>
@endforeach