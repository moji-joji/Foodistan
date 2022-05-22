<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;




class UserController extends Controller
{
    //

    public function create()
    {
        return view('users.register');
    }

    // Create New User
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            // 'email' => ['required', 'email', Rule::unique('users', 'email')],
            'email' => ['required', 'email'],

            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        

        return redirect('/');
    }


    public function login()
    {
        return view('users.login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // attempt to login
        if (auth()->attempt($credentials)) {
            $request->session()->regenerateToken();

            return redirect('/')->with('message', 'You are logged in');
        }

        return redirect('/login')->with('message', 'Invalid credentials');
    }
}
