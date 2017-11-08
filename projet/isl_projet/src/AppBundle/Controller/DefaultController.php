<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Newsletter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $siteInfos = self::getSiteInfos();
        $menu = self::getMenu();


        return $this->render('default/index.html.twig',array(
            'pageTitle' => 'Bien être',
            'siteInfos' => $siteInfos,
            'menu' => $menu,
        ));
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function renderContact()
    {
        $siteInfos = self::getSiteInfos();
        $menu = self::getMenu();


        return $this->render('contact.html.twig',array(
            'pageTitle' => 'Contact',
            'siteInfos' => $siteInfos,
            'menu' => $menu,
        ));
    }
    /**
     * @Route("/about", name="about")
     */
    public function renderAbout()
    {
        $siteInfos = self::getSiteInfos();
        $menu = self::getMenu();


        return $this->render('about.html.twig',array(
            'pageTitle' => 'À Propos De Nous',
            'siteInfos' => $siteInfos,
            'menu' => $menu,
        ));
    }
    /**
     * @Route("/newsletter", name="news")
     */
    public function renderNews()
    {
        $siteInfos = self::getSiteInfos();
        $menu = self::getMenu();
        $newsletters = self::getNewsletter();


        return $this->render('newsletter.html.twig',array(
            'pageTitle' => 'Newsletter',
            'siteInfos' => $siteInfos,
            'menu' => $menu,
            'newsletters' => $newsletters,
        ));
    }
    /**
     * @Route("/connexion", name="connexion")
     */
    public function renderConnexion()
    {
        $siteInfos = self::getSiteInfos();
        $menu = self::getMenu();


        return $this->render('connexion.html.twig',array(
            'pageTitle' => 'Connexion',
            'siteInfos' => $siteInfos,
            'menu' => $menu,
        ));
    }
    /**
     * @Route("/inscription", name="inscription")
     */
    public function renderInscription()
    {
        $siteInfos = self::getSiteInfos();
        $menu = self::getMenu();


        return $this->render('inscription.html.twig',array(
            'pageTitle' => 'Inscription',
            'siteInfos' => $siteInfos,
            'menu' => $menu,
        ));
    }





    public function getNewsletter()
    {
        $repository = $this->getDoctrine()->getRepository(Newsletter::class);

        $data = $repository->findAll();
        return $data;
    }


    static function getMenu()
    {
        $menu = [
            ['nom'=> 'PrestataireController','href'=>'prestataire','submenu'=>
                [
                    ['nom'=> 'test','href'=>'homepage'],
                    ['nom'=> 'tesities','href'=>'homepage']
                ]
            ],
            ['nom'=> 'Services','href'=>'categories'],
            ['nom'=> 'News','href'=>'news'],
            ['nom'=> 'Contact','href'=>'contact'],
            ['nom'=> 'A propos de nous','href'=>'about']
        ];
        return $menu;
    }
    static function getSiteInfos(){
        $infos= [
            'nomSite'=> 'Bien-Être',
        ];
        return $infos;
    }
}
