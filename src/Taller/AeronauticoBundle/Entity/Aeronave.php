<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\Aeronave
 *
 * @ORM\Table(name="aeronave")
 * @ORM\Entity
 */
class Aeronave
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
     * @var string $siglas
     *
     * @ORM\Column(name="siglas", type="string", length=45, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $siglas;

    /**
     * @var datetime $certificado
     *
     * @ORM\Column(name="certificado", type="datetime", nullable=false)
     */
    private $certificado;

    /**
     * @var string $serial
     *
     * @ORM\Column(name="serial", type="string", length=45, nullable=false)
     */
    private $serial;

    /**
     * @var float $horastt
     *
     * @ORM\Column(name="horasTT", type="float", nullable=true)
     */
    private $horastt;

    /**
     * @var float $horametro
     *
     * @ORM\Column(name="horametro", type="float", nullable=true)
     */
    private $horametro;

    /**
     * @var float $ciclos
     *
     * @ORM\Column(name="ciclos", type="float", nullable=true)
     */
    private $ciclos;

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
     * @var Cliente
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     * })
     */
    private $cliente;

    /**
     * @var TipoAeronave
     *
     * @ORM\ManyToOne(targetEntity="TipoAeronave")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_aeronave_id", referencedColumnName="id")
     * })
     */
    private $tipoAeronave;



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
     * Set siglas
     *
     * @param string $siglas
     */
    public function setSiglas($siglas)
    {
        $this->siglas = $siglas;
    }

    /**
     * Get siglas
     *
     * @return string 
     */
    public function getSiglas()
    {
        return $this->siglas;
    }

    /**
     * Set certificado
     *
     * @param datetime $certificado
     */
    public function setCertificado($certificado)
    {
        $this->certificado = $certificado;
    }

    /**
     * Get certificado
     *
     * @return datetime 
     */
    public function getCertificado()
    {
        return $this->certificado;
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
     * Set horametro
     *
     * @param float $horametro
     */
    public function setHorametro($horametro)
    {
        $this->horametro = $horametro;
    }

    /**
     * Get horametro
     *
     * @return float 
     */
    public function getHorametro()
    {
        return $this->horametro;
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
     * Set cliente
     *
     * @param Taller\AeronauticoBundle\Entity\Cliente $cliente
     */
    public function setCliente(\Taller\AeronauticoBundle\Entity\Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    /**
     * Get cliente
     *
     * @return Taller\AeronauticoBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set tipoAeronave
     *
     * @param Taller\AeronauticoBundle\Entity\TipoAeronave $tipoAeronave
     */
    public function setTipoAeronave(\Taller\AeronauticoBundle\Entity\TipoAeronave $tipoAeronave)
    {
        $this->tipoAeronave = $tipoAeronave;
    }

    /**
     * Get tipoAeronave
     *
     * @return Taller\AeronauticoBundle\Entity\TipoAeronave 
     */
    public function getTipoAeronave()
    {
        return $this->tipoAeronave;
    }
}