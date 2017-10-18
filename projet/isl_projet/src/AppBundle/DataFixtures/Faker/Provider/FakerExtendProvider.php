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
                $str = 'prest' . ($faker->email);
                break;
            case 'tva':
                $str = 'TVA BE '.$faker->randomNumber(3,true);
                break;

        }

        return $str;
    }
}

