<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Forfait;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function search(Request $request){
        if (!$request->has('recherche')) {
            return view('recherche.index', ['resultats'=> []]);
        }
        $recherche = $request->recherche;
        $forfaits = Forfait::where("nom","LIKE","%$recherche%")
            ->select(["id","description as nom","forfait As model"])
            ->orWhere("description","LIKE","%$recherche%");
        $entreprises = Entreprise::where("nom","LIKE","%$recherche%")
            ->select(["id","nom","entreprise As model"])
            ->orWhere("description","LIKE","%$recherche%")
            ->union($forfaits)
            ->orderBy("nom");
        $resultats = $entreprises->get();
        return view('recherche.index', ['resultats'=> $resultats]);
    }
}
