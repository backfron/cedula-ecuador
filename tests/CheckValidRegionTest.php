<?php

namespace Tests;

use Tests\TestCase;
use Backfron\CedulaEcuador\Cedula;
use Backfron\CedulaEcuador\Checkers\CheckValidRegion;

class CheckValidRegionTest extends TestCase
{
    /** @test */
    public function can_check_valid_region_01()
    {
        $cedula = new Cedula('0199999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_02()
    {
        $cedula = new Cedula('0299999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_03()
    {
        $cedula = new Cedula('0399999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_04()
    {
        $cedula = new Cedula('0499999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_05()
    {
        $cedula = new Cedula('0599999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_06()
    {
        $cedula = new Cedula('0699999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_07()
    {
        $cedula = new Cedula('0799999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_08()
    {
        $cedula = new Cedula('0899999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_09()
    {
        $cedula = new Cedula('0999999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_10()
    {
        $cedula = new Cedula('1099999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_12()
    {
        $cedula = new Cedula('1299999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_13()
    {
        $cedula = new Cedula('1399999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_14()
    {
        $cedula = new Cedula('1499999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_15()
    {
        $cedula = new Cedula('1599999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_16()
    {
        $cedula = new Cedula('1699999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_17()
    {
        $cedula = new Cedula('1799999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_18()
    {
        $cedula = new Cedula('1899999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_19()
    {
        $cedula = new Cedula('1999999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_20()
    {
        $cedula = new Cedula('2099999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_21()
    {
        $cedula = new Cedula('2199999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_22()
    {
        $cedula = new Cedula('2299999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_23()
    {
        $cedula = new Cedula('2399999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_24()
    {
        $cedula = new Cedula('2499999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_valid_region_30()
    {
        $cedula = new Cedula('3099999999');

        $checker = new CheckValidRegion($cedula);

        $this->assertTrue($checker->check());
    }

    /** @test */
    public function can_check_invalid_regions()
    {
        $cedula = new Cedula('2503495585');

        $checker = new CheckValidRegion($cedula);

        $this->assertFalse($checker->check());
    }
}
