<?php

namespace Ccm\CfdiBundle\Entity;

use Doctrine\ORM\EntityRepository;

class FacturaRepository extends EntityRepository
{
    public function findByMonth($month)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM CcmCfdiBundle:Factura p WHERE MONTH(p.fecha) = :month ORDER BY p.fecha ASC'
            )->setParameter('month', $month)
            ->getResult();
    }

    public function findByFileName($fname)
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM CcmCfdiBundle:Factura p WHERE p.nombreArchivo = :fname'
            )->setParameter('fname', $fname)
            ->getResult();
    }
}