<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //  show users
    public function index()
    {
        $users = User::paginate(5); // Fetch all users from the database
        return view('admin.admin_users', compact('users')); // Return the view with users data
    }
    
    public function showfilter(Request $request)
    {
        $query = User::query();

        if ($request->has('role') && $request->role != '') {
            $query->where('role', $request->role);
        }

        if ($request->has('start_date') && $request->has('end_date')) {
            $query->whereBetween('created_at', [$request->start_date, $request->end_date]);
        }

        $users = $query->get();

        return view('admin.admin', compact('users'));
    }

    public function admin_show_information($id)
    {
        $users = User::findOrFail($id); // Assuming you have a Customer model
        
        return view('admin.admin_user_information', compact('users'));
    }
    
    public function admin_user_view_information($id)
    {
        $users = User::findOrFail($id); // Assuming you have a Customer model
        
        return view('admin.admin_user_view_information', compact('users'));
    }
}
