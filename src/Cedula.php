<?php

namespace Backfron\CedulaEcuador;

use Backfron\CedulaEcuador\Checkers\CheckValidRegion;
use Backfron\CedulaEcuador\Checkers\CheckNumberOfDigits;
use Backfron\CedulaEcuador\Checkers\CheckVerificationDigit;

class Cedula
{
    /**
     * All provinces of Ecuador
     *
     * @var array
     */
    protected $provinces = [
        '01' => 'Azuay',
        '02' => 'Bolivar',
        '03' => 'Cañar',
        '04' => 'Carchi',
        '05' => 'Cotopaxi',
        '06' => 'Chimborazo',
        '07' => 'El Oro',
        '08' => 'Esmeraldas',
        '09' => 'Guayas',
        '10' => 'Imbabura',
        '11' => 'Loja',
        '12' => 'Los Ríos',
        '13' => 'Manabí',
        '14' => 'Morona Santiago',
        '15' => 'Napo',
        '16' => 'Pastaza',
        '17' => 'Pichincha',
        '18' => 'Tungurahua',
        '19' => 'Zamora Chinchipe',
        '20' => 'Galápagos',
        '21' => 'Sucumbíos',
        '22' => 'Orellana',
        '23' => 'Santo Domingo de los Tsáchilas',
        '24' => 'Santa Elena',
        '30' => 'Registrado en el exterior',
    ];

    /**
     * The CI number
     *
     * @var string
     */
    public $number;

    /**
     * The checkers to validate the CI
     *
     * @var array
     */
    protected $checkers = [
        CheckNumberOfDigits::class,
        CheckValidRegion::class,
        CheckVerificationDigit::class,
    ];

    /**
     * Cedula constructor
     *
     * @param string $number
     */
    public function __construct($number)
    {
        if (gettype($number)  !== 'string') {
            throw new \InvalidArgumentException("The CI number must be a string.");
        }

        $this->number = $number;
    }

    /**
     * Determines if the CI number is valid
     *
     * @return boolean
     */
    public function isValid()
    {
        foreach ($this->checkers as $checker) {
            if( !(new $checker($this))->check()) {
                return false;
            }
        }

        return true;
    }

    /**
     * Gets the province of the CI
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->provinces[substr($this->number, 0, 2)];
    }

}
