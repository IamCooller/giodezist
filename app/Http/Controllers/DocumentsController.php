<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TabDocuments;
use App\Models\Documents;
use App;
class DocumentsController extends Controller
{
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locale = App::getLocale();
        $numberC = 'TablicenseNumber_' . $locale;
        $titleC = 'TablicenseTitle_' . $locale;
    
     
        $tabDocuments = TabDocuments::orderBy($numberC)->where( $titleC ,'!=',NULL)->get();
      
       

       

        return view('frontend/documents/index', compact('tabDocuments'));
    }
}
