<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function showLogin  () {
        return view('login');
    }
    public function showRegister  () {
        return view('register');
    }

    public function register(Request $request) {
        $credentials = $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);

        $credentials['password'] = bcrypt($credentials['password']);
        User::create($credentials);

        return redirect("/login");
    }
    
    public function logout(Request $req): RedirectResponse {
        Auth::logout();

        $req->session()->invalidate();
 
        $req->session()->regenerateToken();
    
        return redirect('/');
    }

    public function login(Request $req): RedirectResponse {
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $req->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
