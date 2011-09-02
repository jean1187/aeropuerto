<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\AplicacionBoletin
 *
 * @ORM\Table(name="aplicacion_boletin")
 * @ORM\Entity
 */
class AplicacionBoletin
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer $boletinId
     *
     * @ORM\Column(name="boletin_id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $boletinId;

    /**
     * @var integer $aeronaveId
     *
     * @ORM\Column(name="aeronave_id", type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $aeronaveId;

    /**
     * @var float $recurrenteHoras
     *
     * @ORM\Column(name="recurrente_horas", type="float", nullable=true)
     */
    private $recurrenteHoras;

    /**
     * @var datetime $recurrenteFecha
     *
     * @ORM\Column(name="recurrente_fecha", type="datetime", nullable=true)
     */
    private $recurrenteFecha;

    /**
     * @var datetime $fechaAplicacion
     *
     * @ORM\Column(name="fecha_aplicacion", type="datetime", nullable=true)
     */
    private $fechaAplicacion;

    /**
     * @var boolean $aplicable
     *
     * @ORM\Column(name="aplicable", type="boolean", nullable=true)
     */
    private $aplicable;

    /**
     * @var datetime $createAt
     *
     * @ORM\Column(name="create_at", type="datetime", nullable=true)
     */
    private $createAt;

    /**
     * @var datetime $updateAt
     *
     * @ORM\Column(name="update_at", type="datetime", nullable=true)
     */
    private $updateAt;

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
     * @var Aeronave
     *
     * @ORM\ManyToOne(targetEntity="Aeronave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aeronave_id", referencedColumnName="id")
     * })
     */
    private $aeronave;

    /**
     * @var Boletin
     *
     * @ORM\ManyToOne(targetEntity="Boletin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="boletin_id", referencedColumnName="id")
     * })
     */
    private $boletin;



    /**
     * Set id
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set boletinId
     *
     * @param integer $boletinId
     */
    public function setBoletinId($boletinId)
    {
        $this->boletinId = $boletinId;
    }

    /**
     * Get boletinId
     *
     * @return integer 
     */
    public function getBoletinId()
    {
        return $this->boletinId;
    }

    /**
     * Set aeronaveId
     *
     * @param integer $aeronaveId
     */
    public function setAeronaveId($aeronaveId)
    {
        $this->aeronaveId = $aeronaveId;
    }

    /**
     * Get aeronaveId
     *
     * @return integer 
     */
    public function getAeronaveId()
    {
        return $this->aeronaveId;
    }

    /**
     * Set recurrenteHoras
     *
     * @param float $recurrenteHoras
     */
    public function setRecurrenteHoras($recurrenteHoras)
    {
        $this->recurrenteHoras = $recurrenteHoras;
    }

    /**
     * Get recurrenteHoras
     *
     * @return float 
     */
    public function getRecurrenteHoras()
    {
        return $this->recurrenteHoras;
    }

    /**
     * Set recurrenteFecha
     *
     * @param datetime $recurrenteFecha
     */
    public function setRecurrenteFecha($recurrenteFecha)
    {
        $this->recurrenteFecha = $recurrenteFecha;
    }

    /**
     * Get recurrenteFecha
     *
     * @return datetime 
     */
    public function getRecurrenteFecha()
    {
        return $this->recurrenteFecha;
    }

    /**
     * Set fechaAplicacion
     *
     * @param datetime $fechaAplicacion
     */
    public function setFechaAplicacion($fechaAplicacion)
    {
        $this->fechaAplicacion = $fechaAplicacion;
    }

    /**
     * Get fechaAplicacion
     *
     * @return datetime 
     */
    public function getFechaAplicacion()
    {
        return $this->fechaAplicacion;
    }

    /**
     * Set aplicable
     *
     * @param boolean $aplicable
     */
    public function setAplicable($aplicable)
    {
        $this->aplicable = $aplicable;
    }

    /**
     * Get aplicable
     *
     * @return boolean 
     */
    public function getAplicable()
    {
        return $this->aplicable;
    }

    /**
     * Set createAt
     *
     * @param datetime $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;
    }

    /**
     * Get createAt
     *
     * @return datetime 
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set updateAt
     *
     * @param datetime $updateAt
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;
    }

    /**
     * Get updateAt
     *
     * @return datetime 
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
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
     * Set aeronave
     *
     * @param Taller\AeronauticoBundle\Entity\Aeronave $aeronave
     */
    public function setAeronave(\Taller\AeronauticoBundle\Entity\Aeronave $aeronave)
    {
        $this->aeronave = $aeronave;
    }

    /**
     * Get aeronave
     *
     * @return Taller\AeronauticoBundle\Entity\Aeronave 
     */
    public function getAeronave()
    {
        return $this->aeronave;
    }

    /**
     * Set boletin
     *
     * @param Taller\AeronauticoBundle\Entity\Boletin $boletin
     */
    public function setBoletin(\Taller\AeronauticoBundle\Entity\Boletin $boletin)
    {
        $this->boletin = $boletin;
    }

    /**
     * Get boletin
     *
     * @return Taller\AeronauticoBundle\Entity\Boletin 
     */
    public function getBoletin()
    {
        return $this->boletin;
    }
}