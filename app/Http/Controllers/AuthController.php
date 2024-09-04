<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Admin.Auth.Auth');
    }

    public function login(Request $request)
    {
        // Validate the login request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Get the login credentials
        $credentials = $request->only('email', 'password');

        // Attempt to log in the user
        if (Auth::attempt($credentials)) {
            // Check if the authenticated user is an admin
            if (Auth::user()->is_admin) {
                
                // dd($user=Auth::user());
                return redirect()->route('Admin');
            } else {
                // Log the user out if they are not an admin and redirect back to login with an error message
                Auth::logout();
                return redirect()->route('login')->with('error', 'You do not have admin access.');
            }
        }

        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid credentials.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
