<?php

namespace Snappminds\ContableBundle\Entity\Cuenta;

use Doctrine\ORM\Mapping as ORM;
use Snappminds\Farmacia\ContableBundle\Entity\Cuenta\TipoCuenta;

/**
 * @ORM\Entity(repositoryClass="Snappminds\ContableBundle\Entity\Cuenta\CuentaRepository")
 * @author ldelia
 */
class Cuenta
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */    
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */    
    private $descripcion;
    
    /**
     * @ORM\ManyToOne(targetEntity="Snappminds\Farmacia\ContableBundle\Entity\Cuenta\TipoCuenta", cascade={"persist"} )
     */
    protected $tipoCuenta;
    
    public function __construct($descripcion = null,TipoCuenta $tipoCuenta = null)
    {
        $this->setDescripcion($descripcion);
        $this->setTipoCuenta($tipoCuenta);
    }

    public function getId()
    {
        return $this->id;
    }
    
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }  
    
    public function getTipoCuenta()
    {
        return $this->tipoCuenta;
    }

    public function setTipoCuenta(\Snappminds\Farmacia\ContableBundle\Entity\Cuenta\TipoCuenta $tipoCuenta)
    {
        $this->tipoCuenta = $tipoCuenta;
    }

    public function __toString()
    {
        return $this->descripcion;
    }    

}
