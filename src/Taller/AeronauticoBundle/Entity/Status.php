<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\Status
 *
 * @ORM\Table(name="status")
 * @ORM\Entity
 */
class Status
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
     * @ORM\Column(name="nombre", type="string", length=20, nullable=false)
     */
    private $nombre;

    /**
     * @var categoria
     *
     * @ORM\ManyToOne(targetEntity="CategoriaStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_status_id", referencedColumnName="id")
     * })
     */
    private $categoria;



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
     * Set categoria
     *
     * @param Taller\AeronauticoBundle\Entity\CategoriaStatus $categoria
     */
    public function setCategoria(\Taller\AeronauticoBundle\Entity\CategoriaStatus $categoria)
    {
        $this->categoria= $categoria;
    }

    /**
     * Get categoria
     *
     * @return Taller\AeronauticoBundle\Entity\CategoriaStatus 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}