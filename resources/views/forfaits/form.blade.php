@csrf
<div>
    <label for="nom">Nom forfait</label>
    <span><input type="text" name="nom_forfait" id="nom_forfait" value="{{$forfait->nom_forfait}}"></span>
</div>
<div>
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" value="{{$forfait->description}}"></span>
</div>
<div>
    <label for="prix">Prix</label>
    <span><input type="number" name="prix" id="prix" value="{{$forfait->prix}}"></span>
</div>
