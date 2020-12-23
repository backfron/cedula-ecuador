<?php

namespace Backfron\CedulaEcuador\Checkers;

use Backfron\CedulaEcuador\Cedula;

abstract class Checker
{
    protected $cedula;
    /**
     * Undocumented function
     *
     * @param Cedula $cedula
     */
    public function __construct(Cedula $cedula)
    {
        $this->cedula = $cedula;
    }

    abstract public function check();
}
