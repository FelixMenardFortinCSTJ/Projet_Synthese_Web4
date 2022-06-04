<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paiements = Paiement::all();
        return view('paiements.index', ['paiements'=>$paiements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paiement = new Paiement();
        return view('paiements.create', ['paiement'=>$paiement]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paiement = new Paiement();
        $paiement->fill($request->all());
        $paiement->save();
        return redirect()->route('paiements.show', $paiement);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function show(Paiement $paiement)
    {
        return view('paiements.show', ['paiement'=>$paiement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function edit(Paiement $paiement)
    {
        return view('paiements.edit', ['paiement'=>$paiement]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paiement $paiement)
    {
        $paiement->fill($request->all());
        $paiement->save();
        return redirect()->route('paiements.show', $paiement);
    }

    public function delete(Paiement $paiement)
    {
        return view('paiements.delete', ['paiement'=>$paiement]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paiement $paiement)
    {
        $paiement->delete();
        return redirect()->route('dashboard');
    }
}
