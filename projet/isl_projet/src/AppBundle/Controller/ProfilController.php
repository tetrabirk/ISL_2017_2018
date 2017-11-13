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

    //////        INTERNAUTE: 22       PRESTATAIRE: 32
    public function getUtilisateur($id)
    {
        $repository = $this->getDoctrine()->getRepository(Utilisateur::class);
        $data = $repository->findOneBy(array('id'=> $id));

        return $data;
    }

    /**
     * @Route("/profil/{id}", defaults ={"id"=null}, name="profil")
     */
    public function renderProfil()
    {
        return $this->render('profilBase.html.twig',array(
            'pageTitle' => "profil Utilisateur",
        ));
    }

    /**
     * @Route("/profil/suppression", name="profil_suppression")
     */
    public function renderProfilSuppression()
    {
        return $this->render('profilSuppression.html.twig',array(
            'pageTitle' => "profil - Suppression",
        ));
    }








    /**
     * @Route("/profil/stages", name="profil_stages")
     */
    public function renderProfilStage()
    {
        return $this->render('profilStages.html.twig',array(
            'pageTitle' => "profil - Stages",
        ));
    }

    /**
     * @Route("/profil/stage/nouveau", name="profil_stage_nouveau")
     */
    public function renderProfilStageNouveau()
    {
        return $this->render('profilStageNouveau.html.twig',array(
            'pageTitle' => "profil - Stage - Nouveau",
        ));
    }

    /**
     * @Route("/profil/stage/MiseAJour", name="profil_stage_miseAJour")
     */
    public function renderProfilStageMiseAJour()
    {
        return $this->render('profilStageMiseAJour',array(
            'pageTitle' => "profil - Stage - Mise à jour",
        ));
    }

    /**
     * @Route("/profil/stage/Suppression", name="profil_stage_suppression")
     */
    public function renderProfilStageSuppression()
    {
        return $this->render('profilStageMiseAJour',array(
            'pageTitle' => "profil - Stage - Suppression",
        ));
    }






    /**
     * @Route("/profil/promos", name="profil_promos")
     */
    public function renderProfilPromo()
    {
        return $this->render('profilPromos.html.twig',array(
            'pageTitle' => "profil - Promos",
        ));
    }

    /**
     * @Route("/profil/promo/nouveau", name="profil_promo_nouveau")
     */
    public function renderProfilPromoNouveau()
    {
        return $this->render('profilPromoNouveau.html.twig',array(
            'pageTitle' => "profil - Promo - Nouveau",
        ));
    }

    /**
     * @Route("/profil/promo/MiseAJour", name="profil_promo_miseAJour")
     */
    public function renderProfilPromoMiseAJour()
    {
        return $this->render('profilPromoMiseAJour',array(
            'pageTitle' => "profil - Promo - Mise à jour",
        ));
    }

    /**
     * @Route("/profil/promo/Suppression", name="profil_promo_suppression")
     */
    public function renderProfilPromoSuppression()
    {
        return $this->render('profilPromoMiseAJour',array(
            'pageTitle' => "profil - Promo - Suppression",
        ));
    }


}