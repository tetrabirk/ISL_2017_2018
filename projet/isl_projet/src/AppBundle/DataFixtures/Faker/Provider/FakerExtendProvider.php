<?php

namespace AppBundle\DataFixtures\Faker\Provider;
use Faker;


class FakerProxyProvider
{
    public static function fakerProxy($formater)
    {
            $faker= Faker\Factory::create();

            $str  = $faker->name();


        return $str;
    }
}

