<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\CategorieDeServices;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $manager->flush();
    }
}
