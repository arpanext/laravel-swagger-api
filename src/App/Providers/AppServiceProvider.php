<?php

namespace Arpanext\Swagger\Schemas\Api\App\Providers;

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
                'namespace' => 'Arpanext\Swagger\Schemas\Api\App\Http\Controllers\Api\Swagger\Schemas',
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
                __DIR__ . '/../../config' => config_path('vendor/arpanext'),
            ], 'swagger-schemas-api');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        Config::get('vendor.arpanext.swagger.schemas.index') ?: $this->mergeConfigFrom(__DIR__ . '/../../config/swagger/schemas/index.php', 'vendor.arpanext.swagger.schemas.index');
    }
}
