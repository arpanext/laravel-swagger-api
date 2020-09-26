<?php

namespace Arpanext\SwaggerApiLpkg\App\Http\Controllers\Api\Specifications;

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
    public function __invoke(Request $request)
    {
        $openapi = \OpenApi\scan(app_path('Http/Controllers/Api'));

        return response()->json(json_decode($openapi->toJson()));
    }
}
