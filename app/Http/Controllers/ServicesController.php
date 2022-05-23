<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\ServicesSingle;
use App;
class ServicesController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locale = App::getLocale();
        $number = 'ServiceNumber_' . $locale;
        $categories = Services::orderBy($number)->get();
        
        return view('frontend/services/index', compact('categories'));
    }

    public function show($id)
    {
        $service = ServicesSingle::findOrFail($id);
    
        return view('frontend/services/show', compact('service'));
    }
}
