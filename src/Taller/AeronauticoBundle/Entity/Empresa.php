<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity
 */
class Empresa
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=70, nullable=false)
     */
    private $nombre;

    /**
     * @var text $direccion
     *
     * @ORM\Column(name="direccion", type="text", nullable=true)
     */
    private $direccion;

    /**
     * @var string $rif
     *
     * @ORM\Column(name="rif", type="string", length=20, nullable=false)
     */
    private $rif;

    /**
     * @var string $tlf
     *
     * @ORM\Column(name="tlf", type="string", length=15, nullable=true)
     */
    private $tlf;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

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
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * Set direccion
     *
     * @param text $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return text 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set rif
     *
     * @param string $rif
     */
    public function setRif($rif)
    {
        $this->rif = $rif;
    }

    /**
     * Get rif
     *
     * @return string 
     */
    public function getRif()
    {
        return $this->rif;
    }

    /**
     * Set tlf
     *
     * @param string $tlf
     */
    public function setTlf($tlf)
    {
        $this->tlf = $tlf;
    }

    /**
     * Get tlf
     *
     * @return string 
     */
    public function getTlf()
    {
        return $this->tlf;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
}