<?php

namespace Snappminds\ContableBundle\Entity\TipoCuenta;

use Doctrine\ORM\Mapping as ORM;
use Snappminds\ContableBundle\Entity\TipoCuenta\TipoCuenta;

/**
 * @ORM\Entity
 */
class Activo extends TipoCuenta
{
  const nombre = 'Activo';
  
  public function getNombre(){
    return self::nombre;
  }
  
  public function getCoeficienteContable(){
    return 1;
  }
}
