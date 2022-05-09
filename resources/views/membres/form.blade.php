@csrf
<div class="contenu">
    <h1>Détails : {{$membre['titre']}}</h1>
    <div class="detail">
        <div class="membre">
    <div>
        <label for="Nom">Nom de l'établissement</label>
        <span><input type="text" name="nom_evenement" id="nom_evenement" value="{{$membre->nom_evenement}}"></span>
    </div>
    <div>
        <label for="Ressource">Personne ressource</label>
        <span><input type="text" name="personne_ressource" id="personne_ressource" value="{{$membre->personne_ressource}}"></span>
    </div>
    <div>
        <label for="civique">Votre adresse civique</label>
        <span><input type="text" name="adresse_civique" id="adresse_civique" value="{{$membre->adresse_civique}}"></span>
    </div>
    <div>
        <label for="rue">Votre rue</label>
        <span><input type="text" name="rue" id="rue" value="{{$membre->rue}}"></span>
    </div>
    <div>
        <label for="code_postal">Votre code postal</label>
        <span><input type="text" name="code_postal" id="code_postal" value="{{$membre->code_postal}}"></span>
    </div>
    <div>
        <label for="ville">La ville</label>
        <span><input type="text" name="ville" id="ville" value="{{$membre->ville}}"></span>
    </div>
    <div>
        <label for="telephone">Votre numéro de téléphone</label>
        <span><input type="text" name="telephone" id="telephone" value="{{$membre->telephone}}"></span>
    </div>
    <div>
        <label for="logo">Le logo de votre établissement</label>
        <span><input type="text" name="logo_etablissement" id="logo_etablissement" value="{{$membre->logo_etablissement}}"></span>
    </div>
    <div>
        <label for="courriel">Votre courriel</label>
        <span><input type="text" name="courriel" id="courriel" value="{{$membre->courriel}}"></span>
    </div>
    <div>
        <label for="site_web">Votre site web</label>
        <span><input type="text" name="site_web" id="site_web" value="{{$membre->site_web}}"></span>
    </div>
    <div>
        <label for="description">Description</label>
        <span><input type="text" name="description" id="description" value="{{$membre->description}}"></span>
    </div>
    <div>
        <label for="commodites">Commodités</label>
        <span><input type="text" name="commodites" id="commodites" value="{{$membre->commodites}}"></span>
    </div>
    <div>
        <label for="sous_categorie">Les sous-catégories</label>
        <span><input type="text" name="sous_categorie" id="sous_categorie" value="{{$membre->sous_categorie}}"></span>
    </div>
    <div>
        <label for="membre_categorie">La catégorie de membre</label>
        <span><input type="text" name="membre_categorie" id="membre_categorie" value="{{$membre->membre_categorie}}"></span>
    </div>
</div>