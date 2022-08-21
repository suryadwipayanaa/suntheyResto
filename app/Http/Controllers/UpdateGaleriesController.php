<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateGaleriesController extends Controller
{
    public function index()
    {
        return view('galeries.update', [
            "tittle" => "Update Galeries"
        ]);
    }
}
