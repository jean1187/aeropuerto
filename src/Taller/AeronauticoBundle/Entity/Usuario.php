<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taller\AeronauticoBundle\Entity\Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
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
     * @var string $user
     *
     * @ORM\Column(name="user", type="string", length=10, nullable=false)
     */
    private $user;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=16, nullable=false)
     */
    private $password;

    /**
     * @var string $token
     *
     * @ORM\Column(name="token", type="string", length=20, nullable=true)
     */
    private $token;

    /**
     * @var string $forget
     *
     * @ORM\Column(name="forget", type="string", length=20, nullable=true)
     */
    private $forget;

    /**
     * @var datetime $expireAt
     *
     * @ORM\Column(name="expire_at", type="datetime", nullable=true)
     */
    private $expireAt;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
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
     * Set user
     *
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set token
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set forget
     *
     * @param string $forget
     */
    public function setForget($forget)
    {
        $this->forget = $forget;
    }

    /**
     * Get forget
     *
     * @return string 
     */
    public function getForget()
    {
        return $this->forget;
    }

    /**
     * Set expireAt
     *
     * @param datetime $expireAt
     */
    public function setExpireAt($expireAt)
    {
        $this->expireAt = $expireAt;
    }

    /**
     * Get expireAt
     *
     * @return datetime 
     */
    public function getExpireAt()
    {
        return $this->expireAt;
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
}