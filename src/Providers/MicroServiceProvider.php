<?php

namespace Costa\MicroService\Providers;

use Costa\MicroService\Middleware\JsonResponseMiddleware;
use Illuminate\Support\ServiceProvider;

class MicroServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('api', JsonResponseMiddleware::class);
        app('router')->aliasMiddleware('json', JsonResponseMiddleware::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
