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




class Categories extends Controller
{

    //TODO creer un fichier où je mettrais tt les fonction "getqqlchose" pour éviter les répétitions

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

    /**
     * @Route("/services/{slug}", defaults ={"slug"=null}, name="categories")
     */
    public function renderCategories($slug)
    {
        $categories = $this->getCategoriesDeServices(null);
        $siteInfos = DC::getSiteInfos();
        $menu = DC::getMenu();


        return $this->render('services.html.twig',array(
            'categories' => $categories,
            'pageTitle' => 'Catégories De Services',
            'siteInfos' => $siteInfos,
            'menu' => $menu,
        ));
    }
}