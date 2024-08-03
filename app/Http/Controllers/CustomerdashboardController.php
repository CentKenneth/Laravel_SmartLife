<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class CustomerdashboardController extends Controller
{
    
    //routes for transactions
    public function Customer_transactions()
    {
        $userId = Auth::id();
    // Fetch transactions for the authenticated user
    $transactions = Transaction::where('user_id', $userId)->get();
    
    // Return the view with transactions data
    return view('customer.customer_transactions', compact('transactions'));
    
        
    }
    //get the link of admin register user page
}