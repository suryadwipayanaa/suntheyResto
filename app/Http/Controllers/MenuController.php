<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('tampilan.menu', [
            "tittle" => "Menu",
            "data" => Menu::all()
        ]);
    }
}
