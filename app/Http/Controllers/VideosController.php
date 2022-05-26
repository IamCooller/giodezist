<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;
use App;
class VideosController extends Controller
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
        $title = 'VideosTitle_' . $locale;
        $videos = Videos::latest($publish)->where( $title ,'!=',NULL)->paginate(
            $perPage = 9, $columns = ['*'], $pageName = 'videos', $onFirstPage = 0
        );
        return view('frontend/videos/index', compact('videos'));
    }

    public function show($id)
    {
        $videos = Videos::findOrFail($id);
        return view('frontend/videos/show', compact('videos'));
    }
}
