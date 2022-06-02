@extends('meslayouts.base')

@section('titre')
Tableau de bord admin
@endsection

@section('contenu')
<div class="interface">
        <h1>Ajouter / Modifier / Supprimer</h1>
                <form class="Edition" action="">
                    <div class="edit1">
                        <div>
                            <label for="">nom de l'établissement</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Personne ressource</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Addresse civique</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Rue</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Code postal</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Ville</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Numéro de téléphone</label>
                            <span><input type="text"></span>
                        </div>
                    </div>

                    <div class="edit2">
                        <div>
                            <label for="">Logo de l'établissement</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Courriel</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Site web</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Description</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Commodités</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Sous-Catégories</label>
                            <span><input type="text"></span>
                        </div>
                        <div>
                            <label for="">Catégorie de membre</label>
                            <span><input type="text"></span>
                        </div>
                    </div>
                    <button class="ConfirmEdit">Ajouter / Modifier / Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@endsection