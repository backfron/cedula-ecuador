<?php

namespace Backfron\CedulaEcuador;

use Backfron\CedulaEcuador\Checkers\CheckValidRegion;
use Backfron\CedulaEcuador\Checkers\CheckNumberOfDigits;
use Backfron\CedulaEcuador\Checkers\CheckVerificationDigit;

class Cedula
{
    public $number;

    protected $checkers = [
        CheckNumberOfDigits::class,
        CheckValidRegion::class,
        CheckVerificationDigit::class,
    ];

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function isValid()
    {
        foreach ($this->checkers as $checker) {
            if( !(new $checker($this))->check()) {
                return false;
            }
        }

        return true;
    }

}
