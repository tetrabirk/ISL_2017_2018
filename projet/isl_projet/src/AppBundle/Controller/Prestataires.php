<?php
/**
 * Created by PhpStorm.
 * User: Vi
 * Date: 17/10/2017
 * Time: 18:53
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use AppBundle\Entity\Prestataire;


class Prestataires extends Controller
{

    public function transform($dataIn){
        $dataOut = array();
        foreach ($dataIn as $prest){
            $dataOut ['arrayPrestataires'] = [$prest->getId()];
            $dataOut[$prest->getId()]['name'] = ($prest->getNom());
            $dataOut[$prest->getId()]['description'] = '';
            $dataOut[$prest->getId()]['image'] = 'http://lorempixel.com/output/abstract-q-c-640-480-3.jpg';
            $dataOut[$prest->getId()]['href'] = '#';
            $dataOut[$prest->getId()]['categorie'] = ['href'=>'#','name'=>'categ bidon'];
            $dataOut[$prest->getId()]['promotionEnAvant'] = '';
            $dataOut[$prest->getId()]['categoriesDeServices'] = ['categ','bidon'];
            $dataOut[$prest->getId()]['commune'] = 'comun';
            $dataOut[$prest->getId()]['localite'] = 'local';
            $dataOut[$prest->getId()]['avis'] = ['star'=>1];
        }
        return $dataOut;


    }

    /**
     * @Route("/test/{id}", name="test1")
     */
    public function test($id)
    {
        $repository = $this->getDoctrine()->getRepository(Prestataire::class);

        if($id != 0){
            $data = $repository->findOneBy(
                array('id'=> $id)
            );


        }else {
            $data = $repository->findAll();
        }

        $data1 = $this->transform($data);
        dump($data1);
        return $this->render('prestataires.html.twig',array($data1));
    }

}