<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom_evenement",
		"personne_ressource",
		"adresse_civique",
		"rue",
        "code_postal",
        "ville",
        "telephone",
        "logo_etablissement",
        "courriel",
        "site_web",
        "description",
        "commodites",
        "sous_categorie",
        "membre_categorie",
    ];
}
