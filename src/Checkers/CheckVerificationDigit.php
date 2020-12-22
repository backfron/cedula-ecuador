<?php

namespace Backfron\CedulaEcuador\Checkers;

class CheckVerificationDigit extends Checker
{

    public function check()
    {
        $cedulaArray = array_map(function($digit) {
            return (int) $digit;
        }, str_split($this->cedula->number));

        $odd = 0;
        $even = 0;
        for ($i=0; $i < count($cedulaArray); $i = $i +2) {
            $number = (int) $cedulaArray[$i] * 2;
            $number = $number > 9 ? $number - 9 : $number;
            $odd = $odd + $number;
        }

        for ($i = 1; $i < count($cedulaArray) - 1; $i = $i + 2) {
            $even = $even + (int) $cedulaArray[$i];
        }

        $total = $even + $odd;
        $superiorTen = (int) ceil($total / 10) * 10;
        $verificationDigit = $superiorTen - $total;
        $verificationDigit = $verificationDigit == 10 ? 0 : $verificationDigit;

        return $verificationDigit === $cedulaArray[9];
    }
}
