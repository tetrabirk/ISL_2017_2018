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
use AppBundle\Controller\DefaultController as DC;

use AppBundle\Entity\Prestataire;


class Prestataires extends Controller
{
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
     * @Route("/prestataire/{id}", defaults ={"id"=0}, name="prestataire")
     */
    public function renderPrestataires($id)
    {
        $prestataires = $this->getPrestataires($id);
        $categories = $this->getCategoriesDeServices(0);
        $menu = DC::getMenu();
        $siteInfos = DC::getSiteInfos();
        $stats['nbreDElement'] = count($prestataires);


        if($id !=0){
            return $this->render('prestataire.html.twig',array(

                'categories'=> $categories,
                'stats'=> $stats,
                'prestataire' => $prestataires,
                'pageTitle' => $prestataires->getNom(),
                'menu' => $menu,
                'siteInfos' => $siteInfos
            ));
        }else{
            return $this->render('prestataires.html.twig',array(
                'prestataires' => $prestataires,
                'pageTitle' => 'Nos Prestataires',
                'categories'=> $categories,
                'stats'=> $stats,
                'menu' => $menu,
                'siteInfos' => $siteInfos
            ));

        }


    }

}