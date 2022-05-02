<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = Membre::all();
        return view('membres.index', ['membres'=>$membres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $membre = new Membre();
        return view('membres.create', ['membre'=>$membre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $membre = new Membre();
        $membre->fill($request->all());
        $membre->save();
        return redirect()->route('membres.show', $membre);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function show(Membre $membre)
    {
        return view('membres.show', ['membre'=>$membre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
        return view('membres.edit', ['membre'=>$membre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membre $membre)
    {
        $membre->fill($request->all());
        $membre->save();
        return redirect()->route('membres.show', $membre);
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function delete(Membre $membre)
    {
        return view('membres.delete', ['membre'=>$membre]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Membre $membre)
    {
        if ($request->has('delete')) {
            $membre->delete();
            return redirect()->route('membres.index');
        } else {
            return redirect()->route('membres.show', $membre);
        }
    }
}
