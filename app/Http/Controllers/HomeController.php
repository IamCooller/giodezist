<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePage;
use App\Models\Services;
use App\Models\Objects;
use App\Models\News;
use App;
class HomeController extends Controller
{
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $locale = App::getLocale();
        $numberC = 'ServiceNumber_' . $locale;
        $titleC = 'ServiceTitle_' . $locale;
    
        $categories = Services::orderBy($numberC)->where( $titleC ,'!=',NULL)->paginate(4);
        $numberO = 'ObjectNumber_' . $locale;
        $titleO = 'TitleObject_' . $locale;
        $objectsM = Objects::orderBy($numberO)->where( $titleO ,'!=',NULL)->paginate(5);

        
        $publishN = 'published_' . $locale;
        $titleN = 'NewsTitle_' . $locale;
        $news = News::latest($publishN)->where( $titleN ,'!=',NULL)->paginate(3);

        $homePage = HomePage::latest()->first();
        return view('frontend/home/index', compact('homePage', 'categories', 'objectsM','news'));
    }
}
