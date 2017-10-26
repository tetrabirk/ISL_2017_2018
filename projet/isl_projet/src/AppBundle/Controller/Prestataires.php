<?php
/**
 * Created by PhpStorm.
 * User: Vi
 * Date: 17/10/2017
 * Time: 18:53
 */

namespace AppBundle\Controller;

use AppBundle\Entity\CategorieDeServices;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use AppBundle\Entity\Prestataire;


class Prestataires extends Controller
{
//
//    public function transform($dataIn){
//        $dataOut = array();
//        foreach ($dataIn as $prest){
//
//            $dataOut['arrayPrestataires'][$prest->getId()]['name'] = ($prest->getNom());
//            $dataOut['arrayPrestataires'][$prest->getId()]['description'] = '';
//            $dataOut['arrayPrestataires'][$prest->getId()]['image'] = 'product-1.jpg';
//            $dataOut['arrayPrestataires'][$prest->getId()]['href'] = '#';
//            $dataOut['arrayPrestataires'][$prest->getId()]['categorie'] = ['href'=>'#','name'=>'categ bidon'];
//            $dataOut['arrayPrestataires'][$prest->getId()]['promotionEnAvant'] = '';
//            $dataOut['arrayPrestataires'][$prest->getId()]['categoriesDeServices'] = ['categ','bidon'];
//            $dataOut['arrayPrestataires'][$prest->getId()]['commune'] = 'comun';
//            $dataOut['arrayPrestataires'][$prest->getId()]['localite'] = 'local';
//            $dataOut['arrayPrestataires'][$prest->getId()]['avis'] = ['star'=>1];
//        }
//        return $dataOut;
//
//
//    }
    public function getPrestataires($id)
    {
        $repository = $this->getDoctrine()->getRepository(Prestataire::class);

        if($id != 0){
            $data = $repository->findOneBy(
                array('id'=> $id)
            );
        }else {
            $data = $repository->findAll();
        }
        return $data;
    }

    public function getCategoriesDeServices($id)
    {
        $repository = $this->getDoctrine()->getRepository(CategorieDeServices::class);

        if($id != 0){
            $data = $repository->findOneBy(
                array('id'=> $id)
            );
        }else {
            $data = $repository->findAll();
        }
        return $data;
    }

//TODO : entities : add image, slug
//TODO : get : categories des prestataires, notes moyennes, promotions, stages
//TODO : tranformation notes->étoiles

    /**
     * @Route("/test/{id}", name="test1")
     */
    public function test($id)
    {
        $prestataires = $this->getPrestataires($id);
        $categories = $this->getCategoriesDeServices(0);
        $stats['nbreDElement'] = count($prestataires);
        return $this->render('prestataires.html.twig',array(
            'pageTitle' => 'Titre de la page test',
            'breadcrumb' => ['bread', 'crumb'],
            'categories'=> $categories,
            'stats'=> $stats,
            'prestataires' => $prestataires
        ));
    }

}