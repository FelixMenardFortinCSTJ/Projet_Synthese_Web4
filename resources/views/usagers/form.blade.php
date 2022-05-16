@csrf
<div>
    <label for="prenom">Prenom usager</label>
    <span><input type="text" name="prenom_usager" id="prenom_usager" value="{{$usager->prenom_usager}}"></span>
</div>
<div>
    <label for="nom">Nom usager</label>
    <span><input type="text" name="nom_usager" id="nom_usager" value="{{$usager->nom_usager}}"></span>
</div>
<div>
    <label for="adresse_civique">Adresse</label>
    <span><input type="text" name="adresse_civique" id="adresse_civique" value="{{$usager->adresse_civique}}"></span>
</div>
<div>
    <label for="ville">Ville</label>
    <span><input type="text" name="ville_usager" id="ville_usager" value="{{$usager->ville_usager}}"></span>
</div>
<div>
    <label for="code_postal">Code postal</label>
    <span><input type="text" name="code_postal" id="code_postal" value="{{$usager->code_postal}}"></span>
</div>
<div>
    <label for="telephone">Numéro de téléphone</label>
    <span><input type="number" name="telephone" id="telephone" value="{{$usager->telephone}}"></span>
</div>
<div>
    <label for="courriel">Adresse courriel</label>
    <span><input type="email" name="courriel" id="courriel" value="{{$usager->courriel}}"></span>
</div>
<div>
    <label for="mot_de_passe">Mot de passe</label>
    <span><input type="password" name="mot_de_passe" id="mot_de_passe" value="{{$usager->mot_de_passe}}"></span>
</div>