<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable =[
        "user_id",
        "panier_id",
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function panier()
    {
        return $this->belongsTo(Panier::class, 'panier_id');
    }
}
