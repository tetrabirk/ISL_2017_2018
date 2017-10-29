<?php

namespace AppBundle\DataFixtures\Faker\Provider;
use Faker;


class FakerExtendProvider
{
    public static function randomChoice($array){
        $rand_key = array_rand($array,1);
        return $array[$rand_key];
    }

    public static function fakerExt($attribut)
    {
        $faker= Faker\Factory::create();
        $str ='';
        switch ($attribut) {
            case 'nom_prest':
                $choice = self::randomChoice(['Zen', 'Cool', 'Bien-Etre', 'Palace', 'ASBL', 'et fils', 'S.A.', 'Detente', 'Yang']);
                $str = ($faker->word) . ' ' . $choice;
                break;

            case 'email_prest':
                $str = 'p.' . ($faker->email);
                break;
            case 'email_inter':
                $str = 'i.' . ($faker->email);
                break;
            case 'tva':
//                je génère le chiffre en 2 fois car il le traite comme un integer et le nombre devient trop grand
                $str = 'TVA BE 0'.$faker->randomNumber(5,true).$faker->randomNumber(5,true);
                break;
            case 'nom_image':
                $unix = substr((str_replace(' ','',microtime())),2);
                $str = $unix.'.jpg';
                break;

        }

        return $str;
    }
}

