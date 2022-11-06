<?php

namespace App\Http\Controllers;

use App\Models\Busine;
use Illuminate\Http\Request;

class BussinesController extends Controller
{
    public function index()
    {
        return view('main.home');
    }

    public function show($id)
    {
        $busine = Busine::find($id);
        return view('main.show', compact('busine'));
    }

    public function review(Busine $busine)
    {
        return view('main.review', compact('busine'));
    }
}
