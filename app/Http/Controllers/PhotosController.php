<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;
use App;
class PhotosController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locale = App::getLocale();
        $publish = 'published_' . $locale;
        $title = 'PhotosTitle_' . $locale;
        $photos = Photos::latest($publish)->where( $title ,'!=',NULL)->paginate(
            $perPage = 9, $columns = ['*'], $pageName = 'photos', $onFirstPage = 0
        );
        return view('frontend/photos/index', compact('photos'));
    }

    public function show($id)
    {
        $photo = Photos::findOrFail($id);
        return view('frontend/photos/show', compact('photo'));
    }
}
