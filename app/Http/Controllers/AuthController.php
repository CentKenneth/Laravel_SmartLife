<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Route;

class AuthController extends Controller
{
    //register a user
    public function register(Request $request){
        //validate
        $fields = $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'min:3', 'confirmed'],
            'role' => ['required', 'max:255']
        ]);
            // dd($request);

        //Register
        $user = User::create($fields);
        //Login
        Auth::login($user);

        // Redirect based on role
        $role = $user->role;
        switch ($role) {
            case 'Admin':
                return redirect()->route('admin_dash');
                break;
            case 'Customer':
                return redirect()->route('customer_dash');
                break;
            case 'Encoder':
                return redirect()->route('customer_dashb');
                break;
            default:
                return redirect()->route('login');
                break;
        } 
    }

      //login
    public function login(Request $request){
        //validate
        $fields = $request->validate([
            'email' => ['required', 'max:255', 'email', ],
            'password' => ['required'],
        ]);

        // try to login

        if (Auth::attempt($fields, $request->remember)) {
          $role= auth()->user()->role;
            switch ($role) {
                case 'admin':
                    return redirect()->route('admin_dash');
                    break;
                case 'customer':
                    return redirect()->route('customer_dash');
                    break;
                case 'encoder':
                    return redirect()->route('customer_dash');
                    break;
                default:
                    return redirect()->route('login');
                    break;
                }
           
        }else{
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.'
            ]);
        }
    }

    //   logout
    public function logout(Request $request){
        // Logout the user account
        Auth::logout();

        //Invalidate user's session
        $request->session()->invalidate();

        //Regenerate CSRF token
        $request->session()->regenerateToken();

        //redirec to login page
        return redirect('/login');

    }
    


}
