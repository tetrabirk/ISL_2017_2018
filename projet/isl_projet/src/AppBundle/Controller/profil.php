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




class Profil extends Controller
{


    /**
     * @Route("/profil/{id}", defaults ={"id"=null}, name="profil")
     */
    public function renderProfil($id)
    {
//        TODO creer une fonction getprofil
//        $profil= getProfil($id);
        $siteInfos = DC::getSiteInfos();
        $menu = DC::getMenu();


        return $this->render('profil.html.twig',array(
            'pageTitle' => "nom de l'utilisateur",
            'siteInfos' => $siteInfos,
            'menu' => $menu,
        ));
    }
    /**
     * @Route("/profil/miseajour")
     */
    public function renderProfilMiseAJour()
    {
        $siteInfos = DC::getSiteInfos();
        $menu = DC::getMenu();


        return $this->render('profilMiseAJour.html.twig',array(
            'pageTitle' => "profil - mise à jour",
            'siteInfos' => $siteInfos,
            'menu' => $menu,
        ));
    }
    /**
     * @Route("/profil/suppression")
     */
    public function renderProfilSuppression()
    {
        $siteInfos = DC::getSiteInfos();
        $menu = DC::getMenu();


        return $this->render('profilSuppression.html.twig',array(
            'pageTitle' => "profil - Suppression",
            'siteInfos' => $siteInfos,
            'menu' => $menu,
        ));
    }
    /**
     * @Route("/profil/stages/")
     */
    public function renderProfilStages()
    {
        $siteInfos = DC::getSiteInfos();
        $menu = DC::getMenu();


        return $this->render('profilStages.html.twig',array(
            'pageTitle' => "profil - Stages",
            'siteInfos' => $siteInfos,
            'menu' => $menu,
        ));
    }

}