<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view("users.register");
    }

    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            "name" => ["required", "min:3"],
            "email" => ["required", "email", Rule::unique("users", "email")],
            "password" => ["required", "confirmed", "min:6"]
        ]);

        // Hash password
        $formFields["password"] = bcrypt($formFields["password"]);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect("/");
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect("/");
    }

    // Show Login Form
    public function login() {
        return view("users.login");
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect("/");
        }

        return back()->withErrors(["email" => "Lo sentimos, tu correo o contraseña son incorrectos"])->onlyInput("email");
    }
}
