<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Socio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\SocioRepository")
 */
class Socio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="statusA", type="string", length=255)
     */
    private $statusA;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fecha_ingreso", type="date")
     */
    private $fechaIngreso;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fecha_deprecated", type="date", nullable=true)
     */
    private $fechaDeprecated;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="string", length=255)
     */
    private $imagen;

    /**
     * @ORM\OneToMany(targetEntity="Relacion", mappedBy="socio")
     */
    private $relacion;

    public function __construct()
    {
        $this->setStatusA("Activo");
        $this->setFechaIngreso(new \DateTime(date('Y-m-d H:i:s')));
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Socio
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Socio
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set statusA
     *
     * @param string $statusA
     * @return Socio
     */
    public function setStatusA($statusA)
    {
        $this->statusA = $statusA;
    
        return $this;
    }

    /**
     * Get statusA
     *
     * @return string 
     */
    public function getStatusA()
    {
        return $this->statusA;
    }

    /**
     * Set fechaIngreso
     *
     * @param \Date $fechaIngreso
     * @return Socio
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;
    
        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \Date
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaDeprecated
     *
     * @param \Date $fechaDeprecated
     * @return Socio
     */
    public function setFechaDeprecated($fechaDeprecated)
    {
        $this->fechaDeprecated = $fechaDeprecated;
    
        return $this;
    }

    /**
     * Get fechaDeprecated
     *
     * @return \Date
     */
    public function getFechaDeprecated()
    {
        return $this->fechaDeprecated;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Socio
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }
}