<?php

namespace Snappminds\ContableBundle\Entity\TipoCuenta;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"activo" = "Activo", "pasivo" = "Pasivo", "patrimonioNeto" = "PatrimonioNeto", "resultadoPositivo" = "ResultadoPositivo", "resultadoNegativo" = "ResultadoNegativo"})
 */
abstract class TipoCuenta
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
     * @ORM\OneToMany(targetEntity="Snappminds\ContableBundle\Entity\Cuenta\Cuenta", mappedBy="tipoCuenta")
     */
    protected $cuentas;
    
    public function __construct($descripcion)
    {
        $this->setDescripcion($descripcion);
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function addCuenta(Cuenta $cuenta){
      $this->cuentas[] = $cuenta;
    }
    
    public function getCuentas(){
      return $this->cuentas;
    }
    
    public function __toString() {
        return $this->getNombre();
    }
    
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }  
    
    abstract function getCoeficienteContable();
}