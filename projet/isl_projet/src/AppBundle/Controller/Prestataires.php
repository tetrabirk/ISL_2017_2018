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
    public function getPrestataires($slug)
    {
        $repository = $this->getDoctrine()->getRepository(Prestataire::class);

        if($slug != null){
            $data = $repository->findOneBy(
                array('slug'=> $slug)
            );
        }else {
            $data = $repository->findAll();
        }
        return $data;
    }

    public function getCategoriesDeServices($slug)
    {
        $repository = $this->getDoctrine()->getRepository(CategorieDeServices::class);

        if($slug != null){
            $data = $repository->findOneBy(
                array('slug'=> $slug)
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
     * @Route("/prestataire/{slug}", defaults ={"slug"=null}, name="prestataire")
     */
    public function renderPrestataires($slug)
    {
        $prestataires = $this->getPrestataires($slug);
        $categories = $this->getCategoriesDeServices(null);
        $menu = DC::getMenu();
        $siteInfos = DC::getSiteInfos();
        $stats['nbreDElement'] = count($prestataires);


        if($slug !=null){
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