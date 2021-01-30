<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;

class FuncionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmail()
    {
        $result = validate_email('joha@gmail.com');
        $this->assertTrue($result);

        $result = validate_email('johamail.com');
        $this->assertFalse($result);
    }
}
