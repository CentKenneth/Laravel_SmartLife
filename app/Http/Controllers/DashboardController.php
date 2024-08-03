<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

class DashboardController extends Controller
{
    //admin
    public function admin()
    {
        $role = 'admin';
        if ($role !== auth()->user()->role) {
            abort(403);
        }
        $totalUsers = User::count();
        $totalTransactions = Transaction::count();
        $totalAdmins = User::where('role', 'admin')->count();
        
        return view('admin.admin', compact('totalUsers', 'totalTransactions', 'totalAdmins'));;
    }
    //routes for users page
    public function admin_users()
    {
        $role = 'admin';
        if ($role !== auth()->user()->role) {
            abort(403);
        }

        return view('admin.admin_users');
    }
    //routes for transactions
    public function admin_transactions()
    {
        $role = 'admin';
        if ($role !== auth()->user()->role) {
            abort(403);
        }
        return view('admin.admin_customer_transactions');
    }
    //get the link of admin register user page
    public function admin_register_page()
    {
        $role = 'admin';
        if ($role !== auth()->user()->role) {
            abort(403);
        }
        return view('admin.admin_register_user');
    }
    //post function for register a user
    public function admin_register_user(Request $request){
        //validate
       
        $fields = $request->validate([
            'or_no' => ['required', 'max:255', 'unique:users'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'lastname' => ['required', 'max:255'],
            'firstname' => ['required', 'max:255'],
            'middlename' => ['required', 'max:255'],
            'password' => ['required', 'min:3', 'confirmed'],
            'role' => ['required', 'max:255'],
            'bday' => ['required', 'date'],
            'age' => ['required', 'integer'],
            'place_of_birth' => ['required', 'max:255'],
            'gender' => ['required', 'max:255'],
            'civil_status' => ['nullable', 'max:255'],
            'employment_type' => ['nullable', 'max:255'],
            'occupation' => ['nullable', 'max:255'],
            'nationality' => ['nullable', 'max:255'],
            'religion' => ['nullable', 'max:255'],
            'height' => ['nullable', 'numeric'],
            'weight' => ['nullable', 'numeric'],
            'bloodtype' => ['nullable', 'max:3'],
            'present_address' => ['nullable', 'max:255'],
            'permanent_address' => ['nullable', 'max:255'],
            'contact_no' => ['nullable', 'max:15'],
            'spouse_name' => ['nullable', 'max:255'],
            'spouse_bday' => ['nullable', 'date'],
            'spouse_place_of_birth' => ['nullable', 'max:255'],
            'spouse_age' => ['nullable', 'integer'],
            'prim_beneficiary_name' => ['nullable', 'max:255'],
            'prim_bday' => ['nullable', 'date'],
            'prim_age' => ['nullable', 'integer'],
            'prim_contact' => ['nullable', 'max:15'],
            'sec_beneficiary_name' => ['nullable', 'max:255'],
            'sec_bday' => ['nullable', 'date'],
            'sec_age' => ['nullable', 'integer'],
            'sec_contact' => ['nullable', 'max:15'],
        ]);
            // dd($request);

        //Register
        $user = User::create($fields);
        // Redirect based on role
      // Flash success message to the session
        return redirect()->route('admin_registerpage')->with('success', 'Successfully registered!');
        } 


    //encoder
    public function encoder(){
        $role = 'encoder';
        if($role !== auth()->user()->role){
            abort(403);
           }
        return view('encoder.encoder');
    }

    public function customer(){
    
        return view('customer.customer');
    }
}
