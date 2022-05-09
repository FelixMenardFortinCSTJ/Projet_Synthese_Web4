@csrf
<div>
    <label for="nom">Nom de l'événement</label>
    <span><input type="text" name="nom_evenements" id="nom_evenements" value="{{$evenement->nom_evenements}}"></span>
</div>
<div>
    <label for="date">Date de l'événement</label>
    <span><input type="date" name="dates" id="dates" value="{{$evenement->dates}}"></span>
</div>
<div>
    <label for="description">Description de l'événement</label>
    <span><input type="textarea" name="description" id="description" value="{{$evenement->description}}"></span>
</div>
<div>
    <label for="ville">Ville de l'événement</label>
    <span><input type="text" name="ville" id="ville" value="{{$evenement->ville}}"></span>
</div>
<div>
    <label for="prix">Prix de l'événement</label>
    <span><input type="text" name="prix" id="prix" value="{{$evenement->prix}}"></span>
</div>
