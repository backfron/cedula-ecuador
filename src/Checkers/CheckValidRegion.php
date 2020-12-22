<?php

namespace Backfron\CedulaEcuador\Checkers;

class CheckValidRegion extends Checker
{

    public function check()
    {
        $chunk = (int) substr($this->cedula->number, 0, 2);

        if (($chunk > 0 and $chunk <= 24) or $chunk == 30) {
            return true;
        }

        return false;
    }
}
