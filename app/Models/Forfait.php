<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forfait extends Model
{
    use HasFactory;
    protected $fillable = [
        "nom_forfait",
        "description",
		"prix",
    ];
    public function panier()
    {
        return $this->hasOne(Panier::class);
    }
}
