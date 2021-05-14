# Laravel Swagger Schemas

## Installation

Install the package via composer:

```shell script
composer require arpanext/laravel-swagger-schemas-api
```

Publish the config file with:

```shell script
php artisan vendor:publish --provider=Arpanext\\Swagger\\Schemas\\App\\Providers\\AppServiceProvider --tag="swagger-schemas-api"
```

Update the coofig file in config/vendor/arpanext/swagger/schemas.php:

```php
return [
    'swagger' => [
        'path' => 'app/Http/Controllers/Api',
    ],
];
```

```shell
php artisan route:list
```

```shell
+--------+----------+-----------------------------------+---------------------------------+-----------------------------------------------------------------------------------+------------+
| Domain | Method   | URI                               | Name                            | Action                                                                            | Middleware |
+--------+----------+-----------------------------------+---------------------------------+-----------------------------------------------------------------------------------+------------+
|        | GET|HEAD | api/v1/swagger/schemas            | api.v1.swagger.schemas.index    | Arpanext\Swagger\Schemas\App\Http\Controllers\Api\Swagger\Schemas\IndexController |            |
|        | GET|HEAD | api/v1/swagger/schemas/{key}.json | api.v1.swagger.schemas.show     | Arpanext\Swagger\Schemas\App\Http\Controllers\Api\Swagger\Schemas\ShowController  |            |
+--------+----------+-----------------------------------+---------------------------------+-----------------------------------------------------------------------------------+------------+
```

```shell
curl http://127.0.0.1:8000/api/v1/swagger/schemas
```

```shell
curl http://127.0.0.1:8000/api/v1/swagger/schemas/default.json
```

## Testing

```shell
vendor/bin/phpunit vendor/arpanext/laravel-swagger-schemas-api --configuration=vendor/arpanext/laravel-swagger-schemas-api/phpunit.xml --do-not-cache-result --coverage-text --coverage-html=coverage/html/laravel-swagger-schemas-api
```
