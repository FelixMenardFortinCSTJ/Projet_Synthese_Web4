<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\TextUI\XmlConfiguration\Group;

class Categorie extends Model
{
    use HasFactory;
    public function groupe()
    {
        return $this->belongsTo(Groupe::class);
    }
    public function entreprises()
    {
        return $this->belongsToMany(Entreprise::class);
    }
}
