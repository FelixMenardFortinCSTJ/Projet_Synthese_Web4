<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        "titulaire",
        "numero_carte",
        "date_expiration",
        "code_securite",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
