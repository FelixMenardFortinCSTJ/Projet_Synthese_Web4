<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Paiement;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paniers = Panier::all();
        return view('paniers.index', ['paniers'=>$paniers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $panier = new Panier();
        $panier->user_id = $request->user_id;
        $panier->forfait_id = $request->forfait_id;
        // $panier->fill($request->all());

        $panier->save();

        return redirect('/forfaits')->with('success','Votre forfait à été ajoutée !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function show(Panier $panier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function edit(Panier $panier)
    {
        return view('paniers.edit', ['panier'=>$panier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Panier $panier)
    {
        $panier->fill($request->all());
        $panier->save();
        return redirect()->route('paniers.show', $panier);
    }

            /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Models\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function delete(Panier $panier)
    {
        return view('paniers.delete', ['panier'=>$panier]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panier  $panier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Panier $panier)
    {
        $panier->delete();
        return redirect()->route('dashboard');
    }
}
