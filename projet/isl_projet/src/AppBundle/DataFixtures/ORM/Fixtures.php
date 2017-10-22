<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\CategorieDeServices;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use Faker;

class Fixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 5; $i++)
        {
            $categorie = new CategorieDeServices();
            $categorie->setNom($faker->name);
            $categorie->setDescription($faker->sentences(3));
            $categorie->setEnAvant(false);
            $categorie->setValide(true);

            $manager->persist($categorie);

        }
        $manager->flush();
    }
}
