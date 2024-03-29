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
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {

            Route::group([
                'prefix' => 'api',
            ], function () {
                Route::middleware(['api', 'auth:sanctum'])
                    ->prefix('post')
                    ->namespace($this->namespace)
                    ->group(base_path('routes/post.php'));

                Route::middleware(['api', 'auth:sanctum'])
                    ->prefix('book')
                    ->namespace($this->namespace)
                    ->group(base_path('routes/books.php'));

                Route::middleware(['api', 'auth:sanctum'])
                    ->prefix('podcast')
                    ->namespace($this->namespace)
                    ->group(base_path('routes/podcast.php'));

                Route::prefix('auth')
                    ->namespace($this->namespace)
                    ->group(base_path('routes/auth.php'));
            });

            Route::middleware('api', 'auth:sanctum')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
