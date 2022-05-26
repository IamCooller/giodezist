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
        $title = 'ServiceTitle_' . $locale;
    
        $categories = Services::orderBy($number)->where( $title ,'!=',NULL)->get();
  

        return view('frontend/services/index', compact('categories'));

/*         $services = Services::orderBy($number)->get();
        $services_single = ServicesSingle::orderBy('id')->get();
        $servicesHas = ServicesSingle::find(1)->Services;
     
        return view('frontend/services/index', compact('services','services_single', 'servicesHas')); */

    }

    public function show($id)
    {
        $service = ServicesSingle::findOrFail($id);
    
        return view('frontend/services/show', compact('service'));
    }
}
