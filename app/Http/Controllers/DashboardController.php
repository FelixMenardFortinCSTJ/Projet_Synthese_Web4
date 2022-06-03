<?php

namespace App\Http\Controllers;
use App\Models\Favori;
use App\Models\Panier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard',[
            'paniers' => Panier::all(),
            'favoris' => Favori::all(),
        ]);
    }
}
