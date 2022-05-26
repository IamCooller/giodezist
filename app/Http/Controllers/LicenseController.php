<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\License;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use App;
use Illuminate\Support\Collection;
class LicenseController extends Controller
{
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $license = License::latest()->first();
        $locale = App::getLocale();
        $column = "licensePhotos_" . $locale;

        
        $data = $this->paginate(json_decode($license[$column]), ['path' => route('license')]);

    
        return view('frontend/license/index', compact('license', 'data'));
    }

    public function paginate($items, $options = [], $perPage = 9, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
