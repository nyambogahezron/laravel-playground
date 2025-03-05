<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($attributes)) {
            request()->session()->regenerate();
            return redirect('/jobs');
        }

        // return back()->withErrors(['email' => 'Your provided credentials could not be verified.']);

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.',
        ]);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
