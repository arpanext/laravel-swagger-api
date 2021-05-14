<?php

namespace Arpanext\Swagger\Schemas\Api\App\Http\Controllers\Api\Swagger\Schemas;

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
        $openapi = \OpenApi\scan(config('vendor.arpanext.swagger.schemas')[$key]['path']);

        return response()->json(json_decode($openapi->toJson()));
    }
}
