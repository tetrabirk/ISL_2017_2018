<?php
/**
 * Created by PhpStorm.
 * User: Vi
 * Date: 17/10/2017
 * Time: 18:53
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class Prestataires
{
    /**
     * @Route("/Prestataires")
     */

    Public function test()
    {
        return new Response('ICI, BIENTÔT, UNE SUPERBE LISTE DE PRESTATAIRE');
    }
}