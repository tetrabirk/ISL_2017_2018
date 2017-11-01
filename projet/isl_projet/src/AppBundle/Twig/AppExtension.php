<?php

namespace AppBundle\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('stars',array($this,'noteToString')),
        );
    }

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