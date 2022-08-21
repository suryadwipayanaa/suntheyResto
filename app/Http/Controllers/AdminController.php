<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin', [
            "tittle" => "Admin || Area",
            "data" => Menu::all()
        ]);
    }
}
