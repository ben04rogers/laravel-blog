<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create() {
        return view("sessions.create");
    }

    // Attempt to login the user based on the provided credentials
    public function store() {

        // Validate request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provied credentials are invalid'
            ]);
        }

        session()->regenerate();

        return redirect("/")->with("success", "Welcome Back!");
    }

    public function destroy () {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

}
