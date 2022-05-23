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
        $services = Services::orderBy($number)->get();
        $services_single = ServicesSingle::orderBy('id')->get();
        $servicesHas = ServicesSingle::find(1)->Services;
        dd( $servicesHas);
        return view('frontend/services/index', compact('services','services_single', 'servicesHas'));
    }
}
