<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\Boletin
 *
 * @ORM\Table(name="boletin")
 * @ORM\Entity
 */
class Boletin
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
     * @var string $boletinNro
     *
     * @ORM\Column(name="boletin_nro", type="string", length=45, nullable=false)
     */
    private $boletinNro;

    /**
     * @var string $mtc
     *
     * @ORM\Column(name="mtc", type="string", length=45, nullable=false)
     */
    private $mtc;

    /**
     * @var datetime $fecha
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string $situacion
     *
     * @ORM\Column(name="situacion", type="string", length=45, nullable=false)
     */
    private $situacion;

    /**
     * @var text $descripcion
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;



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
     * Set boletinNro
     *
     * @param string $boletinNro
     */
    public function setBoletinNro($boletinNro)
    {
        $this->boletinNro = $boletinNro;
    }

    /**
     * Get boletinNro
     *
     * @return string 
     */
    public function getBoletinNro()
    {
        return $this->boletinNro;
    }

    /**
     * Set mtc
     *
     * @param string $mtc
     */
    public function setMtc($mtc)
    {
        $this->mtc = $mtc;
    }

    /**
     * Get mtc
     *
     * @return string 
     */
    public function getMtc()
    {
        return $this->mtc;
    }

    /**
     * Set fecha
     *
     * @param datetime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return datetime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set situacion
     *
     * @param string $situacion
     */
    public function setSituacion($situacion)
    {
        $this->situacion = $situacion;
    }

    /**
     * Get situacion
     *
     * @return string 
     */
    public function getSituacion()
    {
        return $this->situacion;
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
}