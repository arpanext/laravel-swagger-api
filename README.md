# Laravel Swagger Api

```shell script
composer require arpanext/laravel-swagger-api
```

```shell script
php artisan vendor:publish --tag="swagger-api"
```

```shell script
php artisan vendor:publish --provider=Arpanext\\SwaggerApi\\App\\Providers\\AppServiceProvider
```

```shell script
curl http://127.0.0.1:8000/api/v1/swagger-api/schemas
```

```shell script
curl http://127.0.0.1:8000/api/v1/swagger-api/schemas/swagger.json
```
