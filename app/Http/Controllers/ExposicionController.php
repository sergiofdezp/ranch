<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horse;

class ExposicionController extends Controller
{
    public function index()
    {
        $horses = Horse::all();

        return view('exposicion.index', compact('horses'));
    }
}
