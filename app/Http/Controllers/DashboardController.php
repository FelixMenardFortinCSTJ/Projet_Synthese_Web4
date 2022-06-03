<?php

namespace App\Http\Controllers;
use App\Models\Favori;
use App\Models\Panier;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $usager = Auth::user()->usager;
        return view('dashboard.dashboard',[
            'usager' => $usager,
            'paniers' => Panier::all(),
            'favoris' => Favori::all(),
        ]);
    }
}
