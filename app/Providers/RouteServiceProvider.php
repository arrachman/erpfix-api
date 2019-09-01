<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $namespaceAPI = 'App\Http\Controllers\admin\\';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAdminRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    protected function mapAdminRoutes()
    {
        $routeAdmin = "routes/admin/";

        // Admin/f0
        Route::prefix('f0')
            // ->middleware('api')
            ->namespace($this->namespaceAPI . 'f0')
            ->group(base_path($routeAdmin . 'f0.php'));

        // Admin/f1
        Route::prefix('f1')
            // ->middleware('api')
            ->namespace($this->namespaceAPI . 'f1')
            ->group(base_path($routeAdmin . 'f1.php'));

        // Admin/f2
        Route::prefix('f2')
            ->middleware('api')
            ->namespace($this->namespaceAPI . 'f2')
            ->group(base_path($routeAdmin . 'f2.php'));

        // Admin/f3
        Route::prefix('f3')
            ->middleware('api')
            ->namespace($this->namespaceAPI . 'f3')
            ->group(base_path($routeAdmin . 'f3.php'));

        // Admin/f4
        Route::prefix('f4')
            ->middleware('api')
            ->namespace($this->namespaceAPI . 'f4')
            ->group(base_path($routeAdmin . 'f4.php'));

        // Admin/f5
        Route::prefix('f5')
            ->middleware('api')
            ->namespace($this->namespaceAPI . 'f5')
            ->group(base_path($routeAdmin . 'f5.php'));
    }
}
