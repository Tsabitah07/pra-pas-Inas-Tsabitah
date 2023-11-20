<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index(){
        return view("transaction.all", [
            "title" => "Transaction",
            "no" => 1,
            "transactions" => Transaction::all()
        ]);
    }

    public function show($transaction)
    {
        return view('transaction.detail', [
            'title'=> 'detail-transaction',
            'transaction' => Transaction::find($transaction)
        ]);
    }
}
