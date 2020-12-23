<?php

namespace Backfron\CedulaEcuador\Checkers;

class CheckNumberOfDigits extends Checker
{

    public function check()
    {
        return strlen($this->cedula->number) === 10;
    }
}
