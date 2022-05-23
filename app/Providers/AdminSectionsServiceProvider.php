<?php

namespace App\Providers;


use Illuminate\Routing\Router;
use SleepingOwl\Admin\Contracts\Navigation\NavigationInterface;
use SleepingOwl\Admin\Contracts\Template\MetaInterface;
use SleepingOwl\Admin\Contracts\Widgets\WidgetsRegistryInterface;
use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        //\App\User::class => 'App\Http\Sections\Users',
        
        'App\Models\Role' => 'App\Http\Sections\Roles',
        'App\Models\User' => 'App\Http\Sections\Users',
        'App\Models\Options'  => 'App\Http\Sections\Options',
        'App\Models\Fragment' => 'App\Http\Sections\Translation',
        'App\Models\HomePage' => 'App\Http\Sections\HomePage',
        'App\Models\Services' => 'App\Http\Sections\Services',
        'App\Models\ServicesSingle' => 'App\Http\Sections\ServicesSingle',
        'App\Models\Objects'    => 'App\Http\Sections\Objects',
    ];

    
    
    protected $widgets = [
        \App\Widgets\DashboardMap::class,
       // \App\Widgets\NavigationNotifications::class,
        \App\Widgets\NavigationUserBlock::class,
    ];


    

      /**
     * @param \SleepingOwl\Admin\Admin $admin
     *
     * @return void
     */

    public function boot( \SleepingOwl\Admin\Admin $admin ) {


     


        $this->loadViewsFrom( base_path( "app/resources/views" ), 'admin' );
        $this->registerPolicies( 'Admin\\Policies\\' );

        $this->app->call( [ $this, 'registerRoutes' ] );
        $this->app->call( [ $this, 'registerNavigation' ] );

        parent::boot( $admin );

        $this->app->call( [ $this, 'registerViews' ] );
        $this->app->call( [ $this, 'registerMediaPackages' ] );
    }

    /**
     * @param NavigationInterface $navigation
     */
    public function registerNavigation( NavigationInterface $navigation ) {

        require base_path( 'app/Admin/navigation.php' );
    }

    /**
     * @param WidgetsRegistryInterface $widgetsRegistry
     */
    public function registerViews( WidgetsRegistryInterface $widgetsRegistry ) {
        foreach ( $this->widgets as $widget ) {
            $widgetsRegistry->registerWidget( $widget );
        }
    }

    /**
     * @param Router $router
     */
    public function registerRoutes( Router $router ) {
        $router->group( [
            'prefix'     => config( 'sleeping_owl.url_prefix' ),
            'middleware' => config( 'sleeping_owl.middleware' )
        ], function ( $router ) {
            require base_path( 'app/admin/routes.php' );
        } );
    }

    /**
     * @param MetaInterface $meta
     */
    public function registerMediaPackages( MetaInterface $meta ) {
        $packages = $meta->assets()->packageManager();

        require base_path( 'app/assets.php' );
    }
}
