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
        return $this->render('default/index.html.twig',array(
            'pageTitle' => 'Bien être',
        ));
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function renderContact()
    {
        return $this->render('contact.html.twig',array(
            'pageTitle' => 'Contact',
        ));
    }
    /**
     * @Route("/about", name="about")
     */
    public function renderAbout()
    {
        return $this->render('about.html.twig',array(
            'pageTitle' => 'À Propos De Nous',
        ));
    }
    /**
     * @Route("/newsletter", name="news")
     */
    public function renderNews()
    {
        $newsletters = self::getNewsletter();

        return $this->render('newsletter.html.twig',array(
            'pageTitle' => 'Newsletter',
            'newsletters' => $newsletters,
        ));
    }
    /**
     * @Route("/connexion", name="connexion")
     */
    public function renderConnexion()
    {
        return $this->render('connexion.html.twig',array(
            'pageTitle' => 'Connexion',
        ));
    }
    /**
     * @Route("/inscription", name="inscription")
     */
    public function renderInscription()
    {
        return $this->render('inscription.html.twig',array(
            'pageTitle' => 'Inscription',
        ));
    }





    public function getNewsletter()
    {
        $repository = $this->getDoctrine()->getRepository(Newsletter::class);

        $data = $repository->findAll();
        return $data;
    }

}
