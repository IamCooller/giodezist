<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
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
        $title = 'NewsTitle_' . $locale;
        $news = News::latest($publish)->where( $title ,'!=',NULL)->paginate(
            $perPage = 9, $columns = ['*'], $pageName = 'news', $onFirstPage = 0
        );
        return view('frontend/news/index', compact('news'));
    }

    public function show($id)
    {
        $locale = App::getLocale();
        $title = 'NewsTitle_' . $locale;
        $news = News::paginate(3)->where( $title ,'!=',NULL);
        $new = News::findOrFail($id);
        return view('frontend/news/show', compact('new','news'));
    }
}
