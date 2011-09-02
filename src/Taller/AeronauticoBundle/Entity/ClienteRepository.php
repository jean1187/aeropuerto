<?php

namespace Taller\AeronauticoBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ClienteRepository extends EntityRepository
{
    /**
     * Devuelve todas las Cliente asociados a una empresa
     *
     * @param ninguno
     */
    public function findClienteEmpresa()
    {
        $em = $this->getEntityManager();

        $query = $em->createQueryBuilder()
            ->select('c.id,em.nombre')
            ->from('AeronauticoBundle:Cliente', 'c')
            ->leftJoin('AeronauticoBundle:Empresa', 'em')
            ->orderBy('c.id', 'ASC');
            
            

        
    }

}//fin class
