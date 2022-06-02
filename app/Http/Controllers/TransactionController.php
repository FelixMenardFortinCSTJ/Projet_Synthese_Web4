<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = transaction::all();
        return view('transactions.index', ['transaction'=>$transactions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaction = new transaction();
        return view('transaction.create', ['transaction'=>$transaction]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaction = new Transaction();
        $transaction->fill($request->all());
        $transaction->save();
        return redirect()->route('transactions.show', $transaction);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        return view('transactions.show', ['transaction'=>$transaction]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', ['transaction'=>$transaction]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $transaction->fill($request->all());
        $transaction->save();
        return redirect()->route('transaction.show', $transaction);
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Models\Usager  $transaction
     * @return \Illuminate\Http\Response
     */
    public function delete(Transaction $transaction)
    {
        return view('usagers.delete', ['usager'=>$transaction]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Transaction $transaction)
    {
        if($request->has('delete')){
            $transaction->delete();
            return redirect()->route('transactions.index');
        } else{
            return redirect()->route('transactions.show', $transaction);
        }
    }
}
