# Laravel Swagger Schemas

## Installation

Install the package via composer:

```shell script
composer require arpanext/laravel-swagger-schemas
```

Publish the config file with:

```shell script
php artisan vendor:publish --provider=Arpanext\\SwaggerSchemas\\App\\Providers\\AppServiceProvider --tag="swagger-schemas"
```

## Examples

Create a controllers api folder:

```shell
mkdir -p app/Http/Controllers/Api
```

Copy examples to the controllers api folder:

```shell
cp -r ./vendor/zircote/swagger-php/Examples/petstore-3.0 ./app/Http/Controllers/Api/petstore-3.0
```

```shell
php artisan route:list
```

```shell
+--------+----------+-----------------------------------+------------------------------+----------------------------------------------------------------------+------------+
| Domain | Method   | URI                               | Name                         | Action                                                               | Middleware |
+--------+----------+-----------------------------------+------------------------------+----------------------------------------------------------------------+------------+
|        | GET|HEAD | api/v1/swagger/schemas            | api.v1.swagger.schemas.index | Arpanext\SwaggerSchemas\App\Http\Controllers\Api\Schemas\IndexController |            |
|        | GET|HEAD | api/v1/swagger/schemas/{key}.json | api.v1.swagger.schemas.show  | Arpanext\SwaggerSchemas\App\Http\Controllers\Api\Schemas\ShowController  |            |
+--------+----------+-----------------------------------+------------------------------+----------------------------------------------------------------------+------------+
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
