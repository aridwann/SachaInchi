<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

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

    public function show(){
        return view('profile', ['user' => Auth::user()]);
    }

    public function update(Request $request, User $user)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:10240'
        ]);
        
        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            $validated['avatar'] = $request->file('avatar')->store('user-images', 'public');
        }
        $user->update($validated);
        
        return redirect("/profile")->with('success', 'Profil berhasil diperbarui.');
    }
}
