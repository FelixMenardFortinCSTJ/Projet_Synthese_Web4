<?php

namespace App\Http\Controllers;

use App\Models\Forfait;
use Illuminate\Http\Request;

class ForfaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forfaits = Forfait::all();
        return view('forfaits.index', ['forfaits'=>$forfaits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $forfait = new Forfait();
        return view('forfaits.create', ['forfait'=>$forfait]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forfait = new Forfait();
        $forfait->fill($request->all());
        $forfait->save();
        return redirect()->route('forfaits.show', $forfait);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function show(Forfait $forfait)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function edit(Forfait $forfait)
    {
        return view('forfaits.show', ['forfait'=>$forfait]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forfait $forfait)
    {
        $forfait->fill($request->all());
        $forfait->save();
        return redirect()->route('forfaits.show', $forfait);
    }

        /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function delete(Forfait $forfait)
    {
        return view('forfaits.delete', ['forfait'=>$forfait]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forfait  $forfait
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Forfait $forfait)
    {
        if ($request->has('delete')) {
            $forfait->delete();
            return redirect()->route('forfaits.index');
        } else {
            return redirect()->route('forfaits.show', $forfait);
        }
    }
}
