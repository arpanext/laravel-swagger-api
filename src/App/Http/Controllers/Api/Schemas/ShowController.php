<?php

namespace Arpanext\SwaggerApi\App\Http\Controllers\Api\Schemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param string $key
     * @return Response
     */
    public function __invoke(string $key): JsonResponse
    {
        $openapi = \OpenApi\scan(base_path(config('vendor.arpanext.swagger-api.schemas')[$key]['path']));

        return response()->json(json_decode($openapi->toJson()));
    }
}
