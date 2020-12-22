<?php

namespace Tests;

use Tests\TestCase;
use Backfron\CedulaEcuador\Cedula;
use Backfron\CedulaEcuador\Checkers\CheckVerificationDigit;

class CheckVerificationDigitTest extends TestCase
{
    /** @test */
    public function can_check_verification_digit_case_1()
    {
        $cedula = new Cedula('1713175071');

        $checker = new CheckVerificationDigit($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_verification_digit_case_1_2()
    {
        $cedula = new Cedula('0923681191');

        $checker = new CheckVerificationDigit($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_verification_digit_case_1_3()
    {
        $cedula = new Cedula('1003530951');

        $checker = new CheckVerificationDigit($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_verification_digit_case_3()
    {
        $cedula = new Cedula('1002575023');

        $checker = new CheckVerificationDigit($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_verification_digit_case_5()
    {
        $cedula = new Cedula('1003495585');

        $checker = new CheckVerificationDigit($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_verification_digit_case_6()
    {
        $cedula = new Cedula('1002884656');

        $checker = new CheckVerificationDigit($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_verification_digit_case_9()
    {
        $cedula = new Cedula('0915508709');

        $checker = new CheckVerificationDigit($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_verification_digit_case_0()
    {
        $cedula = new Cedula('1306952100');

        $checker = new CheckVerificationDigit($cedula);

        $this->assertTrue($checker->check());
    }
}
