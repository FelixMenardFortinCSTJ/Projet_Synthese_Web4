<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use App\Models\Region;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = ville::all();
        return view("villes.index", ['villes'=>$villes]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ville = new Ville();
        $regions = Region::all();
        return view("villes.create", ["ville"=>$ville, "regions"=>$regions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ville = new Ville();
        $ville->fill($request->all());
        $ville->save();
        $mrcs = [];
        if (isset($request->mrc_id)) {
            $mrcs = $request->mrc_id;
        }
        $ville->mrcs()->sync($mrcs);
        //#Modifier st'afaire là
        return redirect()->route("regions.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function show(Ville $ville)
    {
        return view('villes.show', ['ville'=>$ville]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function edit(Ville $ville)
    {
        $regions = Region::all();
        return view("villes.edit", ["ville"=>$ville, "regions"=>$regions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ville $ville)
    {
        $ville->fill($request->all());
        $ville->save();
        $mrcs = [];
        if (isset($request->mrc_id)) {
            $mrcs = $request->mrc_id;
        }
        $ville->mrcs()->sync($mrcs);
        //#Modifier st'afaire là
        return redirect()->route("regions.index");
    }
        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function delete(Ville $ville)
    {
        return view('villes.delete', ['ville'=>$ville]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ville  $ville
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Ville $ville)
    {
        if ($request->has('delete')) {
            $ville->delete();
            return redirect()->route('villes.index');
        } else {
            return redirect()->route('villes.show', $ville);
        }
    }
}
