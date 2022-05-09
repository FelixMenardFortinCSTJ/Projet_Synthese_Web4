<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Groupe;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprises = Entreprise::all();
        return view("entreprises.index", ['entreprises'=>$entreprises]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entreprise = new Entreprise();
        $groupes = Groupe::all();
        return view("entreprises.create", ["entreprise"=>$entreprise, "groupes"=>$groupes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entreprise = new Entreprise();
        $entreprise->fill($request->all());
        $entreprise->save();
        $categories = [];
        if (isset($request->categorie_id)) {
            $categories = $request->categorie_id;
        }
        $entreprise->categories()->sync($categories);
        //#Modifier st'afaire là
        return redirect()->route("groupes.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        return view('entreprises.show', ['entreprise'=>$entreprise]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        $groupes = Groupe::all();
        return view("entreprises.edit", ["entreprise"=>$entreprise, "groupes"=>$groupes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        $entreprise->fill($request->all());
        $entreprise->save();
        $categories = [];
        if (isset($request->categorie_id)) {
            $categories = $request->categorie_id;
        }
        $entreprise->categories()->sync($categories);
        //#Modifier st'afaire là
        return redirect()->route("groupes.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function delete(Entreprise $entreprise)
    {
        return view('entreprises.delete', ['entreprise'=>$entreprise]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usager  $usager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Entreprise $entreprise)
    {
        if ($request->has('delete')) {
            $entreprise->delete();
            return redirect()->route('entreprises.index');
        } else {
            return redirect()->route('entreprises.show', $entreprise);
        }
    }
}
