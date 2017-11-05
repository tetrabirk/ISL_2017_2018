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




class Admin extends Controller
{

    /**
     * @Route("/admin/{route1}", defaults ={"route1"=null}, name="admin")
     */
    public function renderAdmin($route1)
    {
        $siteInfos = DC::getSiteInfos();
        $menu = DC::getMenu();
        switch ($route1){
            case 'prestataires':
                return $this->render('adminPrestataires.html.twig',array(
                    'pageTitle' => "Admin - Prestataires",
                    'siteInfos' => $siteInfos,
                    'menu' => $menu,
                ));
                break;
            case 'internautes':
                return $this->render('adminInternautes.html.twig',array(
                    'pageTitle' => "Admin - Internautes",
                    'siteInfos' => $siteInfos,
                    'menu' => $menu,
                ));
                break;
            case 'slider':
                return $this->render('adminSlider.html.twig',array(
                    'pageTitle' => "Admin - Slider",
                    'siteInfos' => $siteInfos,
                    'menu' => $menu,
                ));
                break;
            case 'commentaires':
                return $this->render('adminCommentaires.html.twig',array(
                    'pageTitle' => "Admin - Commentaires",
                    'siteInfos' => $siteInfos,
                    'menu' => $menu,
                ));
                break;
            case 'services':
                return $this->render('adminServices.html.twig',array(
                    'pageTitle' => "Admin - Services",
                    'siteInfos' => $siteInfos,
                    'menu' => $menu,
                ));
                break;
            default:
                return $this->render('admin.html.twig',array(
                    'pageTitle' => "Admin",
                    'siteInfos' => $siteInfos,
                    'menu' => $menu,
                ));
                break;
        }
    }
}