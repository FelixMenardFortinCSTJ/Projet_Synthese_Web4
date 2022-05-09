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
<div>
    <label for="code_postale">Ville de l'événement</label>
    <span><input type="text" name="code_postale" id="code_postale" value="{{$usager->code_postale}}"></span>
</div>
<div>
    <label for="telephone">Numéro de téléphone</label>
    <span><input type="number" name="telephone" id="telephone" value="{{$usager->telephone}}"></span>
</div>
<div>
    <label for="courriel">Adresse courriel</label>
    <span><input type="email" name="courriel" id="courriel" value="{{$usager->courriel}}"></span>
</div>