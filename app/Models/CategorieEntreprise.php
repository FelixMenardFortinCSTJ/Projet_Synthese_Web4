<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieEntreprise extends Model
{
    use HasFactory;

    public function entreprises()
    {
        return $this->belongsToMany(Entreprise::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }
}


