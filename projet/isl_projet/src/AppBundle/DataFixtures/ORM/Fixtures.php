<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\CategorieDeServices;
use AppBundle\Entity\Image;
use AppBundle\Entity\Prestataire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

use Faker;

class Fixtures extends Fixture
{
    static $nbreCategorie = 8;
    static $nbrePrestaire = 10;

    public function load(ObjectManager $manager)
    {
        for($i = 0; $i < self::$nbreCategorie; $i++)
        {
            $categorie = $this->genCategorieDeServices($i);

            $manager->persist($categorie);

        }

        for($i = 0; $i < self::$nbrePrestaire; $i++)
        {
            $prestataire = $this->genPrestataires($i);

            $manager->persist($prestataire);
        }

        $manager->flush();
    }

    public function genCategorieDeServices($i)
    {
        $faker = Faker\Factory::create('fr_BE');

        $categorie = new CategorieDeServices();
        $categorie->setNom($faker->words(2,true));
        $categorie->setDescription($faker->sentences(3,true));
        $categorie->setEnAvant(false);
        $categorie->setValide(true);

        $this->addReference('categorie'.$i,$categorie);

        return $categorie;
    }

    public function genPrestataires($i)
    {
        $faker = Faker\Factory::create('fr_BE');

        $prestataire = new Prestataire();
        $prestataire->setEmail($this->uniqueEmail($i,'p'));
        $prestataire->setMotDePasse('password');
        $prestataire->setAdresseNum($faker->buildingNumber);
        $prestataire->setAdresseRue($faker->streetName);
//        $prestataire->setCodePostal($faker->postcode);
//        $prestataire->setLocalite($faker->city);
//        $prestataire->setCommune($faker->city);
        $prestataire->setInscription($faker->dateTimeThisDecade);
        $prestataire->setNbEssaisInfructueux(0);
        $prestataire->setBanni(false);
        $prestataire->setConfInscription(true);

        $prestataire->setNom($faker->words(2,true));
        $prestataire->setSiteInternet($faker->domainName);
        $prestataire->setEmailContact($faker->email);
        $prestataire->setTelephone($faker->phoneNumber);
        $prestataire->setNumTVA($faker->vat);

        $arrayCategorie = $this->arrayCategorie();
        foreach ($arrayCategorie as $ac){
            $prestataire->addCategorie($this->getReference($ac));
        }
        $img = $this->genImage('logo',$i);
        $prestataire->setLogo($this->getReference('logo'.$i));

        return $prestataire;
    }

    public function genImage($type,$i)
    {
        $img = new Image();
        $img->setNom($type.$i.".jpg");
        $this->addReference($type.$i,$img);
    }

    public function uniqueEmail($i,$type)
    {
        $faker = Faker\Factory::create('fr_BE');
        $email = $type.$i.($faker->email);

        return $email;

    }

    public function arrayCategorie()
    {
        $array =[];
        $randCategIds = $this->randomNumbersArray(rand(1,5),1,(self::$nbreCategorie-1));

        for($i = 0; $i < count($randCategIds); $i++)
        {
           $array[$i] = 'categorie'.$randCategIds[$i];
        }
        return $array;

    }

    //fonction piquée tel quelle sur stackOverflow
    //Generating UNIQUE Random Numbers within a range - PHP
    public function randomNumbersArray($count,$min, $max)
    {
        if ($count > (($max - $min)+1))
        {
            return false;
        }
        $values = range($min, $max);
        shuffle($values);
        return array_slice($values,0, $count);
    }

}
