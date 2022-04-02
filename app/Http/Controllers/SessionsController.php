<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        if (auth()->attempt($attributes)) {

            session()->regenerate();

            return redirect("/")->with("Welcome Back!");
        }

        // If validation fails
        return back()->withErrors(["email" => "Your provided credentials could not be verified"]);

    }

    public function destroy () {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }

}
