<?php

namespace Backfron\CedulaEcuador\Checkers;

use Backfron\CedulaEcuador\Cedula;

abstract class Checker
{
    protected $cedula;

    /**
     * Checker constructor
     *
     * @param Cedula $cedula
     */
    public function __construct(Cedula $cedula)
    {
        $this->cedula = $cedula;
    }

    /**
     * The checker implementation
     *
     * @return boolean
     */
    abstract public function check();
}
