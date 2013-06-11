<?php

namespace Snappminds\ContableBundle\Entity\TipoCuenta;

use Doctrine\ORM\Mapping as ORM;
use Snappminds\ContableBundle\Entity\TipoCuenta\TipoCuenta;

/**
 * @ORM\Entity
 */
class ResultadoPositivo extends TipoCuenta
{
  const nombre = 'ResultadoPositivo';
  
  public function getNombre(){
    return self::nombre;
  }
  
  public function getCoeficienteContable(){
    return -1;
  }
}