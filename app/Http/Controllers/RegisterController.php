<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    // Only users not logged in can view register page
    public function __construct() {
        $this->middleware(["guest"]);
    }

    public function create() {

        return view('register.create');
    }

    public function store() {

        // create a user
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|max:255'
        ]);

        $user = User::create($attributes);

        // Log in user
        auth()->login($user);

        return redirect("/")->with("success", "Your account has been created!");
    }
}
