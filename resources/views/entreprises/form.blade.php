@csrf
<div class="contenu">
    <h1>Détails : {{$entreprise['titre']}}</h1>
    <div class="detail">
        <div class="membre">
    <div>
        <label for="Nom">Nom de l'établissement</label>
        <span><input type="text" name="nom" id="nom" value="{{$entreprise->nom}}"></span>
    </div>
    <div>
        <label for="Ressource">Adresse</label>
        <span><input type="text" name="adresse" id="adresse" value="{{$entreprise->adresse}}"></span>
    </div>
    <div>
        <label for="civique">Votre ville</label>
        <span><input type="text" name="ville" id="ville" value="{{$entreprise->ville}}"></span>
    </div>
    <div>
        <label for="codepostal">Votre code postal</label>
        <span><input type="text" name="codepostal" id="codepostal" value="{{$entreprise->codepostal}}"></span>
    </div>
    <div>
        <label for="telephone">Votre numéro de téléphone</label>
        <span><input type="text" name="telephone" id="telephone" value="{{$entreprise->telephone}}"></span>
    </div>
    <div>
        <label for="url_photo">La photo de votre établissement</label>
        <span><input type="text" name="url_photo" id="url_photo" value="{{$entreprise->url_photo}}"></span>
    </div>
    <div>
        <label for="url_logo">Le logo de votre établissement</label>
        <span><input type="text" name="url_logo" id="url_logo" value="{{$entreprise->url_logo}}"></span>
    </div>
    <div>
        <label for="url_site">Le site</label>
        <span><input type="text" name="url_site" id="url_site" value="{{$entreprise->url_site}}"></span>
    </div>
    <div>
        <label for="site_web">Votre site web</label>
        <span><input type="text" name="site_web" id="site_web" value="{{$entreprise->site_web}}"></span>
    </div>
    <div>
        <label for="description">Description</label>
        <span><input type="text" name="description" id="description" value="{{$entreprise->description}}"></span>
    </div>
</div>