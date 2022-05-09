@csrf
<div>
    <label for="nom">Nom usager</label>
    <span><input type="text" name="nom_usager" id="nom_usager" value="{{$usager->nom_usager}}"></span>
</div>
<div>
    <label for="adresse_civique">Adresse civique</label>
    <span><input type="text" name="adresse_civique" id="adresse_civique" value="{{$usager->adresse_civique}}"></span>
</div>
<div>
    <label for="rue">Rue</label>
    <span><input type="text" name="rue" id="rue" value="{{$usager->rue}}"></span>
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