<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [
            "tittle" => "Login"
        ]);
    }

    public function store(Request $request)
    {
        $simpenLogin = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($simpenLogin)) {
            $request->session()->regenerate();
            return redirect('/home');
        }

        return back()->with('loginError', '  Login Gagal');
    }
}
