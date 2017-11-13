<?php
/**
 * Created by PhpStorm.
 * User: Vi
 * Date: 17/10/2017
 * Time: 18:53
 */

namespace AppBundle\Controller;

use AppBundle\Entity\CategorieDeServices;
use AppBundle\Entity\Utilisateur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Controller\DefaultController as DC;




class ProfilController extends Controller
{



    /**
     * @Route("/profil/{route1}/{route2}", defaults ={"route1"=null,"route2"=null }, name="profil")
     */
    public function renderProfil($route1,$route2)
    {
//        TODO récuperer les infos de la session (pour savoir qui est actuellement connecter)

//INTERNAUTE
//        $user = $this->getUtilisateur(45);

////PRESTATAIRE
        $user = $this->getUtilisateur(53);
        $userClassFull = explode('\\',get_class($user));
        $userClass = end($userClassFull);

//        TODO creer une fonction getprofil

        $siteInfos = DC::getSiteInfos();
        $menu = DC::getMenu();
        switch ($route1){
            case 'suppression':
                return $this->render('profil/profilSuppression.html.twig',array(
                    'pageTitle' => "profil - Suppression",
                    'siteInfos' => $siteInfos,
                    'menu' => $menu,
                ));
            case 'stages':
                switch ($route2){
                    case 'new':
                        return $this->render('profil/profilStageNouveau.html.twig',array(
                            'pageTitle' => "profil - Stages - Nouveau",
                            'siteInfos' => $siteInfos,
                            'menu' => $menu,
                        ));
                        break;
                    case 'update':
                        return $this->render('profil/profilStageMiseAJour.html.twig',array(
                            'pageTitle' => "profil - Stages - Mise à jour",
                            'siteInfos' => $siteInfos,
                            'menu' => $menu,
                        ));
                        break;
                    case 'delete':
                        return $this->render('profil/profilStageSuppression.html.twig',array(
                            'pageTitle' => "profil - Stages - Suppression",
                            'siteInfos' => $siteInfos,
                            'menu' => $menu,
                        ));
                        break;
                    default:
                        return $this->render('profil/profilStages.html.twig',array(
                            'pageTitle' => "profil - Stages",
                            'siteInfos' => $siteInfos,
                            'menu' => $menu,
                        ));
                        break;
                }

            case 'promo':
                switch ($route2){
                    case 'new':
                        return $this->render('profil/profilPromoNouveau.html.twig',array(
                            'pageTitle' => "profil - Promos - Nouveau",
                            'siteInfos' => $siteInfos,
                            'menu' => $menu,
                        ));
                        break;
                    case 'update':
                        return $this->render('profil/profilPromoMiseAJour.html.twig',array(
                            'pageTitle' => "profil - Promos - Mise à jour",
                            'siteInfos' => $siteInfos,
                            'menu' => $menu,
                        ));
                        break;
                    case 'delete':
                        return $this->render('profil/profilPromoSuppression.html.twig',array(
                            'pageTitle' => "profil - Promos - Suppression",
                            'siteInfos' => $siteInfos,
                            'menu' => $menu,
                        ));
                        break;
                    default:
                        return $this->render('profil/profilPromos.html.twig',array(
                            'pageTitle' => "profil - Promos",
                            'siteInfos' => $siteInfos,
                            'menu' => $menu,
                        ));
                        break;
                }
            default :
                if($userClass == 'Internaute'){
                    return $this->render('profil/profilInternaute.html.twig',array(
                        'utilisateur' => $user,
                        'pageTitle' => "nom de l'utilisateur",
                        'siteInfos' => $siteInfos,
                        'menu' => $menu,
                    ));
                }else{
                    return $this->render('profil/profilPrestataire.html.twig',array(
                        'utilisateur' => $user,
                        'pageTitle' => "nom de l'utilisateur",
                        'siteInfos' => $siteInfos,
                        'menu' => $menu,
                    ));
                }

        }
    }
    public function getUtilisateur($id)
    {
        $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
        if($id != 0){
            $data = $repository->findOneBy(
                array('id'=> $id)
            );
        }else {
            $data = $repository->findAll();
        }
        return $data;
    }
}