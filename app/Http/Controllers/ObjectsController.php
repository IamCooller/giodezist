<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objects;
use App;
class ObjectsController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locale = App::getLocale();
        $number = 'ObjectNumber_' . $locale;
        $title = 'TitleObject_' . $locale;
        $objects = Objects::orderBy($number)->where( $title ,'!=',NULL)->paginate(
            $perPage = 9, $columns = ['*'], $pageName = 'objects', $onFirstPage = 0
        );
       
        return view('frontend/objects/index', compact('objects'));
    }

    public function show($id)
    {
        $locale = App::getLocale();
        $title = 'TitleObject_' . $locale;
        $objects = Objects::paginate(3)->where( $title ,'!=',NULL);
        $object = Objects::findOrFail($id);
        
        return view('frontend/objects/show', compact('object','objects'));
    }
}
