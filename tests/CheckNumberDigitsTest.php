<?php

namespace Tests;

use Tests\TestCase;
use Backfron\CedulaEcuador\Cedula;
use Backfron\CedulaEcuador\Checkers\CheckNumberOfDigits;

class CheckNumberOfDigitsTest extends TestCase
{
    /** @test */
    public function can_check_that_cedula_has_10_digits()
    {
        $cedula = new Cedula('1234567890');

        $checker = new CheckNumberOfDigits($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_that_cedula_less_than_10_digits()
    {
        $cedula = new Cedula('123456789');

        $checker = new CheckNumberOfDigits($cedula);

        $this->assertFalse($checker->check());
    }

    /** @test */
    public function can_check_that_cedula_more_than_10_digits()
    {
        $cedula = new Cedula('12345678901');

        $checker = new CheckNumberOfDigits($cedula);

        $this->assertFalse($checker->check());
    }

}
