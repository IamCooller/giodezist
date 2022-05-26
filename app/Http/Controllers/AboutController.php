<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App;
class AboutController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $About = About::latest()->first();
        return view('frontend/about/index', compact('About'));
    }
}
