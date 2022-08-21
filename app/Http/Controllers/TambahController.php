<?php

namespace App\Http\Controllers;

use App\Models\Menu;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class TambahController extends Controller
{
    public function index()
    {
        return view('spesial.tambah', [
            "tittle" => "Tambah Data"
        ]);
    }
}
