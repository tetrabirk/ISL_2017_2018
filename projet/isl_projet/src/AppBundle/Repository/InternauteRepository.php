<?php

namespace AppBundle\Repository;

/**
 * InternauteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InternauteRepository extends \Doctrine\ORM\EntityRepository
{
    public function findInternautes($id)
    {
        if($id != -1){
            $data = $this->findOneBy(array('id'=> $id));
        }else {
            $data = $this->findAll();
        }
        return $data;
    }
}
