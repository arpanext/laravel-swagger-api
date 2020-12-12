<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;

class SchemasShowTest extends TestCase
{
    /**
     * Get many object.
     *
     * @return void
     */
    public function testShow()
    {
        $schema = file_get_contents('http://127.0.0.1:8000/api/v1/swagger/schemas/swagger.json');

        $schemasObject = json_decode($schema);

        $this->assertObjectHasAttribute('openapi', $schemasObject);
    }
}
