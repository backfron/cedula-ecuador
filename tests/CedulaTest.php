<?php

namespace Tests;

use Tests\TestCase;
use Backfron\CedulaEcuador\Cedula;

class CedulaTest extends TestCase
{
    /** @test */
    public function can_recognize_a_valid_cedula()
    {
        $cedula = new Cedula('1003495585');

        $this->assertTrue($cedula->isValid());
    }

    /** @test */
    public function can_recognize_an_invalid_cedula_for_invalid_region()
    {
        $cedula = new Cedula('2903495586');

        $this->assertFalse($cedula->isValid());
    }

    /** @test */
    public function can_recognize_an_invalid_cedula_for_invalid_verification_digit_number()
    {
        $cedula = new Cedula('1003495586');

        $this->assertFalse($cedula->isValid());
    }

    /** @test */
    public function can_recognize_an_invalid_cedula_for_less_than_minimun_length()
    {
        $cedula = new Cedula('100349558');

        $this->assertFalse($cedula->isValid());
    }

    /** @test */
    public function can_recognize_an_invalid_cedula_for_more_than_maximum_length()
    {
        $cedula = new Cedula('10034955851');

        $this->assertFalse($cedula->isValid());
    }
}
