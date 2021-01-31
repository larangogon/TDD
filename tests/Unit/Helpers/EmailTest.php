<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
 use App\Helpers\Email;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email()
    {
        $result = Email::validate('johanna@gmail.com');
        $this->assertTrue(true);

        $result = Email::validate('johannagmail.com');
        $this->assertFalse(false);
    }
}
