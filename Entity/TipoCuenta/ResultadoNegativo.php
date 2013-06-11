<?php

namespace Snappminds\ContableBundle\Entity\TipoCuenta;

use Doctrine\ORM\Mapping as ORM;
use Snappminds\ContableBundle\Entity\TipoCuenta\TipoCuenta;

/**
 * @ORM\Entity
 */
class ResultadoNegativo extends TipoCuenta
{ 
  const nombre = 'ResultadoNegativo';
  
  public function getNombre(){
    return self::nombre;
  }
  
  public function getCoeficienteContable(){
    return 1;
  }
}