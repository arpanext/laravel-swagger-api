<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class SchemasIndexTest extends TestCase
{
    /**
     * Get many object.
     *
     * @return void
     */
    public function testShow()
    {
        $schemas = file_get_contents('http://127.0.0.1:8000/api/v1/swagger/schemas');

        $schemasObjects = json_decode($schemas);

        $this->assertGreaterThanOrEqual(1, count($schemasObjects));

        foreach ($schemasObjects as $schemasObject) {
            $this->assertObjectHasAttribute('url', $schemasObject);
        }
    }
}
