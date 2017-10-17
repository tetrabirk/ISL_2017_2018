<?php

namespace AppBundle\DataFixtures\Faker\Provider;
use Faker;


class FakerProxiProvider
{
    public static function fakerProxi($formater)
    {
        $faker= Faker\Factory::create();

        $str  = $faker->$formater;
        return $str;
    }
}