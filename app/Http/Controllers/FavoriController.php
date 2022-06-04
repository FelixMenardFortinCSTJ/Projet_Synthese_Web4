<?php

namespace App\Http\Controllers;

use App\Models\Favori;
use Illuminate\Http\Request;

class FavoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favoris = Favori::all();
        return view('favoris.index', ['favoris'=>$favoris]);
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
        $favori = new Favori();
        $favori->user_id = $request->user_id;
        $favori->entreprise_id = $request->entreprise_id;

        $favori->save();
        return redirect('/dashboard')->with('success','Le membre à été ajoutée à vos favoris !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function show(Favori $favori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function edit(Favori $favori)
    {
        return view('favoris.edit', ['favori'=>$favori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favori $favori)
    {
        $favori->fill($request->all());
        $favori->save();
        return redirect()->route('favoris.show', $favori);
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Models\Favori$ $favori
     * @return \Illuminate\Http\Response
     */
    public function delete(Favori $Favori)
    {
        return view('Favoris.delete', ['Favori'=>$Favori]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favori $favori)
    {
        $favori->delete();
        return redirect()->route('dashboard');
    }
}
