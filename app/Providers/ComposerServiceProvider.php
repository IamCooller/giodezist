<?php

namespace App\Providers;


use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\Models\Options;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       
        View::composer(['layouts.main','frontend.home.index','frontend.contacts.index'], function($view) {
            $view->with(['options' =>  Options::latest()->first()]);
        });
    }
}
