<?php
/**
 * Created by PhpStorm.
 * User: Vi
 * Date: 17/10/2017
 * Time: 18:53
 */

namespace AppBundle\Controller;

use AppBundle\Entity\CategorieDeServices;
use AppBundle\Entity\Commentaire;
use AppBundle\Repository\CommentaireRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Controller\DefaultController as DC;
use Doctrine\ORM\EntityRepository;

use AppBundle\Entity\Prestataire;
use AppBundle\Repository\PrestataireRepository;
use AppBundle\Repository\CategorieDeServicesRepository;

class PrestataireController extends Controller
{



//TODO : entities : add image, slug
//TODO : get : categories des prestataires, notes moyennes, promotions, stages


    /**
     * @Route("/prestataire/{slug}", defaults ={"slug"=null}, name="prestataire")
     */
    public function renderPrestataires($slug)
    {
        /** @var PrestataireRepository $pr */
        $pr = $this->getDoctrine()->getRepository(Prestataire::class);
        $prestataires=$pr->findPrestataires($slug);

        /** @var CategorieDeServicesRepository $cr */
        $cr = $this->getDoctrine()->getRepository(CategorieDeServices::class);
        $categories=$cr->findCategoriesDeServices();

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