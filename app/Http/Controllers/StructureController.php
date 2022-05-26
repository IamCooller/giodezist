<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;
class StructureController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Structure = Structure::latest()->first();
        return view('frontend/structure/index', compact('Structure'));
    }
}
