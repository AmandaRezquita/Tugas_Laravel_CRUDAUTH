<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class LoginController extends Controller
{
    public function loginV()
    {
        return view('login.login', [
            "title" => "Login",
        ]);
    }

    public function loginR(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect("dashboard")->withSuccess('You have login successfully');
        } else {
            return back()->withErrors([
                'email' => 'salah mbak',
            ]);
        }
    }
}
