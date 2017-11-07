<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PrestataireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PrestataireRepository extends EntityRepository
{
    public function findPrestataires($slug)
    {
        if($slug != null){
            $data = $this->findOneBy(array('slug'=> $slug));
        }else {
            $data = $this->findAll();
        }
        return $data;
    }

//    public function getCote(Prestataire $prestataire)
//    {
//        $data = $this->getEntityManager()->createQuery(
//
//        )
//            ->getResult();
//    }

}
