@csrf
<div>
    <label for="nom">Numéro de la transaction</label>
    <span><input type="text" name="numero_commande" id="numero_commande" value="{{$evenement->numero_commande}}"></span>
</div>
<div>
    <label for="date">Facture</label>
    <span><input type="date" name="facture" id="facture" value="{{$evenement->facture}}"></span>
</div>
