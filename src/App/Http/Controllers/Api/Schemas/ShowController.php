<?php

namespace Arpanext\SwaggerApiLpkg\App\Http\Controllers\Api\Schemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $key)
    {
        $openapi = \OpenApi\scan(base_path(config('vendor.arpanext.swagger-api-lpkg.schemas')[$key]['controllers_path']));

        return response()->json(json_decode($openapi->toJson()));
    }
}
