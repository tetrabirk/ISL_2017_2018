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



class Categories extends Controller
{
    /**
     * @Route("/categorie/{slug}", defaults ={"slug"=0}, name="categorie")
     */
    public function renderCategories($slug)
    {

        return $this->render('categories.html.twig',array(

        ));
    }
}