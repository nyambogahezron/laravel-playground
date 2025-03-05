<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);

        //create user

        $user = User::create($attributes);

        Auth::login($user);

        return redirect('/jobs');
    }
}