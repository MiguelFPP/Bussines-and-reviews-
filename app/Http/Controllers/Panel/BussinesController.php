<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Busine;
use Illuminate\Http\Request;

class BussinesController extends Controller
{
    public function index()
    {
        return view('panel.index');
    }

    public function create()
    {
        return view('panel.create');
    }

    public function edit(Busine $busine)
    {
        return view('panel.edit', compact('busine'));
    }
}
