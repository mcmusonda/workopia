<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller
{
    // @desc Show register form
    // @route GET /register
    public function register(): View {
        return view('auth.register');
    }

    // @desc Store user in database
    // @route POST /register
    public function store(Request $request): RedirectResponse {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        // Create User
        $user = User::create($validatedData);

        Auth::login($user);
        
        return redirect()->route('login')->with('success', 'Your registration was successful.You can now login.');
    }
}
