<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\Cambio
 *
 * @ORM\Table(name="cambio")
 * @ORM\Entity
 */
class Cambio
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
     * @var text $motivo
     *
     * @ORM\Column(name="motivo", type="text", nullable=true)
     */
    private $motivo;

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
     * @var Componente
     *
     * @ORM\OneToOne(targetEntity="Componente", inversedBy="componenteNuevo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="componente_nuevo", referencedColumnName="id")
     * })
     */
    private $componenteNuevo;

    /**
     * @var Componente
     *
     * @ORM\OneToOne(targetEntity="Componente", inversedBy="compRemovido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="componente_removido", referencedColumnName="id")
     * })
     */
    private $componenteRemovido;



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
     * Set motivo
     *
     * @param text $motivo
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;
    }

    /**
     * Get motivo
     *
     * @return text 
     */
    public function getMotivo()
    {
        return $this->motivo;
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
     * Set componenteNuevo
     *
     * @param Taller\AeronauticoBundle\Entity\Componente $componenteNuevo
     */
    public function setComponenteNuevo(\Taller\AeronauticoBundle\Entity\Componente $componenteNuevo)
    {
        $this->componenteNuevo = $componenteNuevo;
    }

    /**
     * Get componenteNuevo
     *
     * @return Taller\AeronauticoBundle\Entity\Componente 
     */
    public function getComponenteNuevo()
    {
        return $this->componenteNuevo;
    }

    /**
     * Set componenteRemovido
     *
     * @param Taller\AeronauticoBundle\Entity\Componente $componenteRemovido
     */
    public function setComponenteRemovido(\Taller\AeronauticoBundle\Entity\Componente $componenteRemovido)
    {
        $this->componenteRemovido = $componenteRemovido;
    }

    /**
     * Get componenteRemovido
     *
     * @return Taller\AeronauticoBundle\Entity\Componente 
     */
    public function getComponenteRemovido()
    {
        return $this->componenteRemovido;
    }
}
