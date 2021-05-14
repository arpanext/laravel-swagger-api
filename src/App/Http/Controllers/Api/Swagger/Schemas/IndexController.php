<?php

namespace Arpanext\Swagger\Schemas\Api\App\Http\Controllers\Api\Swagger\Schemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        $schema = array_map(function ($key) {
            return [
                'url' => route('api.v1.swagger.schemas.show', $key),
            ];
        }, array_keys(config('vendor.arpanext.swagger.schemas')));

        return response()->json($schema);
    }
}
