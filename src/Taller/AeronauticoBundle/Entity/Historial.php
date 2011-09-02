<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\Historial
 *
 * @ORM\Table(name="historial")
 * @ORM\Entity
 */
class Historial
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var text $descripcion
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var string $orden
     *
     * @ORM\Column(name="orden", type="string", length=20, nullable=true)
     */
    private $orden;

    /**
     * @var datetime $created
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var float $horaAeronave
     *
     * @ORM\Column(name="hora_aeronave", type="float", nullable=true)
     */
    private $horaAeronave;

    /**
     * @var Cambio
     *
     * @ORM\ManyToOne(targetEntity="Cambio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cambio_id", referencedColumnName="id")
     * })
     */
    private $cambio;

    /**
     * @var Empleado
     *
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empleado_id", referencedColumnName="id")
     * })
     */
    private $empleado;

    /**
     * @var Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresa_id", referencedColumnName="id")
     * })
     */
    private $empresa;

    /**
     * @var Servicios
     *
     * @ORM\ManyToOne(targetEntity="Servicios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="servicios_idservicios", referencedColumnName="idservicios")
     * })
     */
    private $serviciosservicios;



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
     * Set descripcion
     *
     * @param text $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return text 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set orden
     *
     * @param string $orden
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;
    }

    /**
     * Get orden
     *
     * @return string 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set created
     *
     * @param datetime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param datetime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * Get updated
     *
     * @return datetime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set horaAeronave
     *
     * @param float $horaAeronave
     */
    public function setHoraAeronave($horaAeronave)
    {
        $this->horaAeronave = $horaAeronave;
    }

    /**
     * Get horaAeronave
     *
     * @return float 
     */
    public function getHoraAeronave()
    {
        return $this->horaAeronave;
    }

    /**
     * Set cambio
     *
     * @param Taller\AeronauticoBundle\Entity\Cambio $cambio
     */
    public function setCambio(\Taller\AeronauticoBundle\Entity\Cambio $cambio)
    {
        $this->cambio = $cambio;
    }

    /**
     * Get cambio
     *
     * @return Taller\AeronauticoBundle\Entity\Cambio 
     */
    public function getCambio()
    {
        return $this->cambio;
    }

    /**
     * Set empleado
     *
     * @param Taller\AeronauticoBundle\Entity\Empleado $empleado
     */
    public function setEmpleado(\Taller\AeronauticoBundle\Entity\Empleado $empleado)
    {
        $this->empleado = $empleado;
    }

    /**
     * Get empleado
     *
     * @return Taller\AeronauticoBundle\Entity\Empleado 
     */
    public function getEmpleado()
    {
        return $this->empleado;
    }

    /**
     * Set empresa
     *
     * @param Taller\AeronauticoBundle\Entity\Empresa $empresa
     */
    public function setEmpresa(\Taller\AeronauticoBundle\Entity\Empresa $empresa)
    {
        $this->empresa = $empresa;
    }

    /**
     * Get empresa
     *
     * @return Taller\AeronauticoBundle\Entity\Empresa 
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set serviciosservicios
     *
     * @param Taller\AeronauticoBundle\Entity\Servicios $serviciosservicios
     */
    public function setServiciosservicios(\Taller\AeronauticoBundle\Entity\Servicios $serviciosservicios)
    {
        $this->serviciosservicios = $serviciosservicios;
    }

    /**
     * Get serviciosservicios
     *
     * @return Taller\AeronauticoBundle\Entity\Servicios 
     */
    public function getServiciosservicios()
    {
        return $this->serviciosservicios;
    }
}