# Laravel Swagger Schemas

## Installation

Install the package via composer:

```shell script
composer require arpanext/laravel-swagger-schemas
```

Publish the config file with:

```shell script
php artisan vendor:publish --provider=Arpanext\\Swagger\\Schemas\\App\\Providers\\AppServiceProvider --tag="swagger-schemas"
```

Update the coofig file in config/vendor/arpanext/swagger/schemas/index.php:

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
curl http://127.0.0.1:8000/api/v1/swagger/schemas/swagger.json
```

## Testing

```shell
vendor/bin/phpunit vendor/arpanext/laravel-swagger-schemas --configuration=vendor/arpanext/laravel-swagger-schemas/phpunit.xml --do-not-cache-result --coverage-text --coverage-html=coverage/html/laravel-swagger-schemas
```
