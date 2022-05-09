<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usager extends Model
{
    use HasFactory;
    protected $fillable = [
        "prenom_usager",
        "nom_usager",
		"adresse_civique",
		"ville",
		"code_postal",
        "telephone",
        "courriel",
        "mot_de_passe",
    ];
}
