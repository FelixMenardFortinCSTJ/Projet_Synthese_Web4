@csrf
<div>
    <label for="nom">Nom usager</label>
    <span><input type="text" name="nom_usager" id="nom_usager" value="{{$usager->nom_usager}}"></span>
</div>
<div>
    <label for="adresse_civique">Adresse</label>
    <span><input type="text" name="adresse_civique" id="adresse_civique" value="{{$usager->adresse_civique}}"></span>
</div>
<div>
    <label for="telephone">Numéro de téléphone</label>
    <span><input type="number" name="telephone" id="telephone" value="{{$usager->telephone}}"></span>
</div>
<div>
    <label for="courriel">Adresse courriel</label>
    <span><input type="email" name="courriel" id="courriel" value="{{$usager->courriel}}"></span>
</div>