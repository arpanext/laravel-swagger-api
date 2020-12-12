# Laravel Swagger Api

#### Install

```shell script
composer require arpanext/laravel-swagger-api
```

#### Publish

```shell script
php artisan vendor:publish --provider=Arpanext\\SwaggerApi\\App\\Providers\\AppServiceProvider --tag="swagger-api"
```

#### Tests

```shell
vendor/bin/phpunit vendor/arpanext/laravel-swagger-api --configuration=vendor/arpanext/laravel-swagger-api/phpunit.xml --do-not-cache-result --coverage-html coverage/html/laravel-swagger-api
```

#### Examples

```shell
mkdir -p app/Http/Controllers/Api
```

```shell
cp -r ./vendor/zircote/swagger-php/Examples/petstore-3.0 ./app/Http/Controllers/Api/petstore-3.0
```

```shell script
curl http://127.0.0.1:8000/api/v1/swagger/schemas
```

```shell script
curl http://127.0.0.1:8000/api/v1/swagger/schemas/swagger.json
```
