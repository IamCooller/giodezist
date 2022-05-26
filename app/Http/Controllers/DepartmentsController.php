<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departaments;
use App;
class DepartmentsController extends Controller
{
       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locale = App::getLocale();
        $publish = 'publish_at';
        $title = 'departamentsTitle_' . $locale;
        $departments = Departaments::latest($publish)->where( $title ,'!=',NULL)->paginate(
            $perPage = 9, $columns = ['*'], $pageName = 'departments', $onFirstPage = 0
        );
        return view('frontend/departaments/index', compact('departments'));
    }

    public function show($id)
    {
        $locale = App::getLocale();
        $title = 'departamentsTitle_' . $locale;
        $departments = Departaments::paginate(3)->where( $title ,'!=',NULL);
        $departament = Departaments::findOrFail($id);
        return view('frontend/departaments/show', compact('departament','departments'));
    }
}
