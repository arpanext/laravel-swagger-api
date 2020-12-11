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

```shell
git clone https://github.com/zircote/swagger-php.git /tmp/swagger-php
mkdir -p app/Http/Controllers/Api
cp /tmp/swagger-php/Examples/petstore-3.0 app/Http/Controllers/Api/petstore-3.0
```

```shell script
curl http://127.0.0.1:8000/api/v1/swagger/schemas
```

```shell script
curl http://127.0.0.1:8000/api/v1/swagger/schemas/swagger.json
```
