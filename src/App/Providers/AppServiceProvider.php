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
                'namespace' => 'Arpanext\SwaggerApiLpkg\App\Http\Controllers\Api\Specifications',
                'middleware' => [
                    //
                ],
                'as' => 'api.v1.swagger-api-lpkg.specifications.',
                'prefix' => '/api/v1/swagger-api-lpkg/specifications',
            ],
            function () {
                require __DIR__ . '/../../routes/api.php';
            }
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
