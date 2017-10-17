<?php
/**
 * Created by PhpStorm.
 * User: Vi
 * Date: 17/10/2017
 * Time: 19:17
 */
require __DIR__.'/vendor/autoload.php';

$faker = Faker\Factory::create();

var_dump($faker->name());
