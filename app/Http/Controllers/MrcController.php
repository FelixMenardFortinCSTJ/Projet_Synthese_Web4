<?php

namespace App\Http\Controllers;

use App\Models\Mrc;
use Illuminate\Http\Request;

class MrcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mrcs = Mrc::where('id', '>', '1')->get();
        return view('mrcs.index', ['mrcs'=>$mrcs]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mrc = new Mrc();
        return view('mrcs.create', ['mrc'=>$mrc]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mrc = new Mrc();
        $mrc->fill($request->all());
        $mrc->save();
        return redirect()->route('mrcs.show', $mrc);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function show(Mrc $mrc)
    {
        return view('mrcs.show', ['mrc'=>$mrc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function edit(Mrc $mrc)
    {
        return view('mrcs.edit', ['mrc'=>$mrc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mrc $mrc)
    {
        $mrc->fill($request->all());
        $mrc->save();
        return redirect()->route('mrcs.show', $mrc);
    }

          /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function delete(Mrc $mrc)
    {
        return view('mrcs.delete', ['mrc'=>$mrc]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mrc  $mrc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Mrc $mrc)
    {
        if ($request->has('delete')) {
            $mrc->delete();
            return redirect()->route('mrcs.index');
        } else {
            return redirect()->route('mrcs.show', $mrc);
        }
    }
}
