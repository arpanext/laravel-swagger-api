<?php

namespace Tests\Feature;

use Tests\TestCase;

class SchemasIndexTest extends TestCase
{
    /**
     * Get many object.
     *
     * @return void
     */
    public function testShow()
    {
        $response = $this->get('http://127.0.0.1:8000/api/v1/swagger/schemas');

        $response = json_decode($response->content());

        $this->assertGreaterThanOrEqual(1, count($response));

        foreach ($response as $schema) {
            $this->assertObjectHasAttribute('url', $schema);
        }
    }
}
