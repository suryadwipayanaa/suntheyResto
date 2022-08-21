<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahGaleryController extends Controller
{
    public function index()
    {
        return view('galeries.tambah', [
            "tittle" => "Tambah Galeries"
        ]);
    }
}
