<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usager extends Model
{
    use HasFactory;
    protected $fillable = [
        "prenom",
        "nom",
		"adresse_civique",
		"ville",
		"code_postal",
        "telephone",
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getCourrielAttribute()
    {
        return $this->user->email;
    }
}
