<?php

namespace Arpanext\SwaggerApi\App\Http\Controllers\Api\Schemas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return array_map(function ($key) {
            return [
                'url' => route('api.v1.swagger.schemas.show', $key),
            ];
        }, array_keys(config('vendor.arpanext.swagger-api.schemas')));
    }
}
