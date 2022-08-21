<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi.registrasi', [
            "tittle" => "Registrasi"
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:5|max:16'
        ]);


        $validatedData["password"] = bcrypt($validatedData["password"]);

        User::create($validatedData);

        return redirect('/login')->with('sukses', 'Registrasi Succesfull! Please Login');
    }
}
