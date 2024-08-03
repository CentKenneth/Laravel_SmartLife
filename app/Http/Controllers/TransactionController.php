<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all(); // Fetch all users from the database
        return view('transaction.index', compact('transactions')); // Return the view with users data
        // return view('transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $user = User::findOrFail($id);
        return view('transaction.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  $validatedData = $request->validate([
        'user_id' => 'required|exists:users,id',
        'or_no' => 'required|exists:users,or_no',
        'account_name' => 'required|string|max:255',
        'plan_type' => 'required|string|max:255',
        'contract_price' => 'required|numeric',
        'balance' => 'required|numeric',
        'effectivity_date' => 'required|date',
        'expiration_date' => 'required|date',
        'quota_comm' => 'nullable|string|max:255',
        'installment' => 'nullable|string|max:255',
        'status' => 'required|string|max:255',
        'mode_of_payment' => 'required|string|max:255',
        'account_type' => 'required|string|max:255',
    ]);

    // Create a transaction
    Transaction::create($validatedData);

    return redirect()->route('transaction.create', ['id' => $request->user_id])->with('success', 'Transaction added successfully.');
    }

    public function show(Transaction $transaction)
    {
        return view('transaction.show');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        return view('transaction.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
