<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    public function map()
    {
        $this->mapAdminRoutes();
        $this->mapSiteRoutes();
        $this->mapWebRoutes();
    }
    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */

    /**
     * Configure the Admin Routes.
     *
     * @return void
     */
    protected function mapAdminRoutes()
    {
        
            Route::middleware('admin')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));
    }


    /**
     * Configure the Site Routes.
     *
     * @return void
     */
    protected function mapSiteRoutes()
    {
        
            Route::middleware('site')
                ->namespace($this->namespace)
                ->group(base_path('routes/site.php'));
    }

    /**
     * Configure the Web Routes.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        
            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
    }
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
