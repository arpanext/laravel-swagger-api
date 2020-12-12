<?php

namespace Arpanext\SwaggerApi\App\Providers;

use Config;
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
                'namespace' => 'Arpanext\SwaggerApi\App\Http\Controllers\Api\Schemas',
                'middleware' => [
                    //
                ],
                'as' => 'api.v1.swagger.schemas.',
                'prefix' => '/api/v1/swagger/schemas',
            ],
            function () {
                require __DIR__ . '/../../routes/api.php';
            }
        );

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config' => config_path('vendor/arpanext/swagger-api'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (is_null(Config::get('vendor.arpanext.swagger-api.schemas'))) {
            $this->mergeConfigFrom(
                __DIR__ . '/../../config/schemas.php',
                'vendor.arpanext.swagger-api.schemas'
            );
        }
    }
}
