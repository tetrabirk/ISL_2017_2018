<?php

namespace AppBundle\Utils;

class TwigAppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('stars',array($this,'noteToString')),
        );
    }

    //fonction qui transforme une note entre 0 et 1 en 5 carractères destinés à représenter 5 étoiles
    // F représente une étoile plein, H une demi étoile et E une étoile vide
    public function noteToString($notedecimale){
        $note = $notedecimale * 10;
        $star = 0;
        $str = '';

        while ($star < 5){
            if($note>=2){
                $note+= -2;
                $str .= 'F'; //Full
                $star++;

            } elseif($note>=1){

                $note += -1;
                $str .= 'H'; //Half
                $star++;

            }else{

                $str .= 'E'; //Empty
                $star++;
            }
        }

        return $str;
    }
}