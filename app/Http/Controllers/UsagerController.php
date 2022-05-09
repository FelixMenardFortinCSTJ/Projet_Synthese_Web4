<?php

namespace App\Http\Controllers;

use App\Models\Usager;
use Illuminate\Http\Request;

class UsagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usagers = usager::all();
        return view('usagers.index', ['usagers'=>$usagers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usager = new usager();
        return view('usagers.create', ['usager'=>$usager]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usager = new usager();
        $usager->fill($request->all());
        $usager->save();
        return redirect()->route('usagers.show', $usager);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usager  $usager
     * @return \Illuminate\Http\Response
     */
    public function show(Usager $usager)
    {
        return view('usagers.show', ['usager'=>$usager]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usager  $usager
     * @return \Illuminate\Http\Response
     */
    public function edit(Usager $usager)
    {
        return view('usagers.show', ['usager'=>$usager]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usager  $usager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usager $usager)
    {
        $usager->fill($request->all());
        $usager->save();
        return redirect()->route('usagers.show', $usager);
    }

            /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Models\Usager  $usager
     * @return \Illuminate\Http\Response
     */
    public function delete(Usager $usager)
    {
        return view('usagers.delete', ['usager'=>$usager]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usager  $usager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Usager $usager)
    {
        if ($request->has('delete')) {
            $usager->delete();
            return redirect()->route('usagers.index');
        } else {
            return redirect()->route('usagers.show', $usager);
        }
    }
}
