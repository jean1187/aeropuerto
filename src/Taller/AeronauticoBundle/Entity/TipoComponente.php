<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\TipoComponente
 *
 * @ORM\Table(name="tipo_componente")
 * @ORM\Entity
 */
class TipoComponente
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
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var string $idParte
     *
     * @ORM\Column(name="id_parte", type="string", length=45, nullable=false)
     */
    private $idParte;


    /**
     * @var CategoriaComponente
     *
     * @ORM\ManyToOne(targetEntity="CategoriaComponente" )
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria", referencedColumnName="id")
     * })
     */
    private $categoriaComponente;


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
     * Set idParte
     *
     * @param string $idParte
     */
    public function setIdParte($idParte)
    {
        $this->idParte = $idParte;
    }

    /**
     * Get idParte
     *
     * @return string 
     */
    public function getIdParte()
    {
        return $this->idParte;
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

}
