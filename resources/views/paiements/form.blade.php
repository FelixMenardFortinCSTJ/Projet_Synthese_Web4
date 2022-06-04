@csrf
<div class="contenu">
    <h1>Détails : {{$paiement['titre']}}</h1>
    <div class="detail">
        <div class="paiement">
    <div>
        <label for="Titulaire">Titulaire de la carte</label>
        <span><input type="text" name="titulaire" id="titulaire" value="{{$paiement->titulaire}}"></span>
    </div>
    <div>
        <label for="Numero">Numéro de la carte</label>
        <span><input type="text" name="numero_carte" id="numero_carte" value="{{$paiement->numero_carte}}"></span>
    </div>
    <div>
        <label for="Expiration">Date d'expiration de la carte</label>
        <span><input type="text" name="date_expiration" id="date_expiration" value="{{$paiement->date_expiration}}"></span>
    </div>
    <div>
        <label for="Sécurité">Code de sécurité de la carte</label>
        <span><input type="text" name="code_securite" id="code_securite" value="{{$paiement->code_securite}}"></span>
    </div>
</div>
