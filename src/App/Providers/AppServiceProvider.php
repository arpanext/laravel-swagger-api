<?php

namespace Arpanext\SwaggerApiLpkg\App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->router->group(
            [
                'namespace' => 'Arpanext\SwaggerApiLpkg\App\Http\Controllers\Api\Schemas',
                'middleware' => [
                    //
                ],
                'as' => 'api.v1.swagger-api-lpkg.schemas.',
                'prefix' => '/api/v1/swagger-api-lpkg/schemas',
            ],
            function () {
                require __DIR__ . '/../../routes/api.php';
            }
        );

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config' => config_path('vendor/arpanext/swagger-api-lpkg'),
            ], 'swagger-api-lpkg');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (is_null($this->app['config']->get('vendor.arpanext.swagger-api-lpkg.schemas'))) {
            $this->mergeConfigFrom(
                __DIR__ . '/../../config/schemas.php',
                'vendor.arpanext.swagger-api-lpkg.schemas'
            );
        }
    }
}
