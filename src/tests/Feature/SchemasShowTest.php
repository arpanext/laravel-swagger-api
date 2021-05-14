<?php

namespace Tests\Feature;

use Tests\TestCase;

class SchemasShowTest extends TestCase
{
    /**
     * Get many object.
     *
     * @return void
     */
    public function testShow()
    {
        $response = $this->get('http://127.0.0.1:8000/api/v1/swagger/schemas/default.json');

        $response = json_decode($response->content());

        $this->assertObjectHasAttribute('openapi', $response);
    }
}
