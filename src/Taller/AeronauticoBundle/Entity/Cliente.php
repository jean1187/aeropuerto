<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente
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
     * @var Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;



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
     * Set status
     *
     * @param Taller\AeronauticoBundle\Entity\Status $status
     */
    public function setStatus(\Taller\AeronauticoBundle\Entity\Status $status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return Taller\AeronauticoBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set usuario
     *
     * @param Taller\AeronauticoBundle\Entity\Usuario $usuario
     */
    public function setUsuario(\Taller\AeronauticoBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return Taller\AeronauticoBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}