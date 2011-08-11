<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\Componente
 *
 * @ORM\Table(name="componente")
 * @ORM\Entity
 */
class Componente
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
     * @var float $horastt
     *
     * @ORM\Column(name="horasTT", type="float", nullable=true)
     */
    private $horastt;

    /**
     * @var float $horastos
     *
     * @ORM\Column(name="horasTOS", type="float", nullable=true)
     */
    private $horastos;

    /**
     * @var string $serial
     *
     * @ORM\Column(name="serial", type="string", length=20, nullable=true)
     */
    private $serial;

    /**
     * @var float $ciclos
     *
     * @ORM\Column(name="ciclos", type="float", nullable=true)
     */
    private $ciclos;

    /**
     * @var datetime $frecuenciaDate
     *
     * @ORM\Column(name="frecuencia_date", type="datetime", nullable=true)
     */
    private $frecuenciaDate;

    /**
     * @var float $frecuenciaHours
     *
     * @ORM\Column(name="frecuencia_hours", type="float", nullable=true)
     */
    private $frecuenciaHours;

    /**
     * @var integer $aeronaveId
     *
     * @ORM\Column(name="aeronave_id", type="integer", nullable=false)
     */
    private $aeronaveId;

    /**
     * @var Aeronave
     *
     * @ORM\ManyToOne(targetEntity="Aeronave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aeronave_siglas", referencedColumnName="siglas")
     * })
     */
    private $aeronaveSiglas;

    /**
     * @var CategoriaComponente
     *
     * @ORM\ManyToOne(targetEntity="CategoriaComponente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_componente_id", referencedColumnName="id")
     * })
     */
    private $categoriaComponente;

    /**
     * @var TipoComponente
     *
     * @ORM\ManyToOne(targetEntity="TipoComponente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_componente_id", referencedColumnName="id")
     * })
     */
    private $tipoComponente;



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
     * Set horastt
     *
     * @param float $horastt
     */
    public function setHorastt($horastt)
    {
        $this->horastt = $horastt;
    }

    /**
     * Get horastt
     *
     * @return float 
     */
    public function getHorastt()
    {
        return $this->horastt;
    }

    /**
     * Set horastos
     *
     * @param float $horastos
     */
    public function setHorastos($horastos)
    {
        $this->horastos = $horastos;
    }

    /**
     * Get horastos
     *
     * @return float 
     */
    public function getHorastos()
    {
        return $this->horastos;
    }

    /**
     * Set serial
     *
     * @param string $serial
     */
    public function setSerial($serial)
    {
        $this->serial = $serial;
    }

    /**
     * Get serial
     *
     * @return string 
     */
    public function getSerial()
    {
        return $this->serial;
    }

    /**
     * Set ciclos
     *
     * @param float $ciclos
     */
    public function setCiclos($ciclos)
    {
        $this->ciclos = $ciclos;
    }

    /**
     * Get ciclos
     *
     * @return float 
     */
    public function getCiclos()
    {
        return $this->ciclos;
    }

    /**
     * Set frecuenciaDate
     *
     * @param datetime $frecuenciaDate
     */
    public function setFrecuenciaDate($frecuenciaDate)
    {
        $this->frecuenciaDate = $frecuenciaDate;
    }

    /**
     * Get frecuenciaDate
     *
     * @return datetime 
     */
    public function getFrecuenciaDate()
    {
        return $this->frecuenciaDate;
    }

    /**
     * Set frecuenciaHours
     *
     * @param float $frecuenciaHours
     */
    public function setFrecuenciaHours($frecuenciaHours)
    {
        $this->frecuenciaHours = $frecuenciaHours;
    }

    /**
     * Get frecuenciaHours
     *
     * @return float 
     */
    public function getFrecuenciaHours()
    {
        return $this->frecuenciaHours;
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
     * Set aeronaveSiglas
     *
     * @param Taller\AeronauticoBundle\Entity\Aeronave $aeronaveSiglas
     */
    public function setAeronaveSiglas(\Taller\AeronauticoBundle\Entity\Aeronave $aeronaveSiglas)
    {
        $this->aeronaveSiglas = $aeronaveSiglas;
    }

    /**
     * Get aeronaveSiglas
     *
     * @return Taller\AeronauticoBundle\Entity\Aeronave 
     */
    public function getAeronaveSiglas()
    {
        return $this->aeronaveSiglas;
    }

    /**
     * Set categoriaComponente
     *
     * @param Taller\AeronauticoBundle\Entity\CategoriaComponente $categoriaComponente
     */
    public function setCategoriaComponente(\Taller\AeronauticoBundle\Entity\CategoriaComponente $categoriaComponente)
    {
        $this->categoriaComponente = $categoriaComponente;
    }

    /**
     * Get categoriaComponente
     *
     * @return Taller\AeronauticoBundle\Entity\CategoriaComponente 
     */
    public function getCategoriaComponente()
    {
        return $this->categoriaComponente;
    }

    /**
     * Set tipoComponente
     *
     * @param Taller\AeronauticoBundle\Entity\TipoComponente $tipoComponente
     */
    public function setTipoComponente(\Taller\AeronauticoBundle\Entity\TipoComponente $tipoComponente)
    {
        $this->tipoComponente = $tipoComponente;
    }

    /**
     * Get tipoComponente
     *
     * @return Taller\AeronauticoBundle\Entity\TipoComponente 
     */
    public function getTipoComponente()
    {
        return $this->tipoComponente;
    }
}