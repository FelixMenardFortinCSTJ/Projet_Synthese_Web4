@csrf
<div>
    <label for="nom">Nom forfait</label>
    <span><input type="text" name="nom_forfait" id="nom_forfait" value="{{$usager->nom_forfait}}"></span>
</div>
<div>
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" value="{{$usager->description}}"></span>
</div>
<div>
    <label for="prix">Prix</label>
    <span><input type="number" name="prix" id="prix" value="{{$usager->prix}}"></span>
</div>
