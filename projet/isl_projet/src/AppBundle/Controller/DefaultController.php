<?php

namespace AppBundle\Controller;

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
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    static function getMenu()
    {
        $menu = [
            ['nom'=> 'Prestataires','href'=>'prestataire','submenu'=>
                [
                    ['nom'=> 'test','href'=>'homepage'],
                    ['nom'=> 'tesities','href'=>'homepage']
                ]
            ],
            ['nom'=> 'Services','href'=>'homepage'],
            ['nom'=> 'News','href'=>'homepage'],
            ['nom'=> 'Contact','href'=>'homepage'],
            ['nom'=> 'A propos de nous','href'=>'homepage']
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
