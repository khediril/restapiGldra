<?php

namespace App\DataFixtures;

use App\Entity\Place;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PlaceFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $place = new Place();
         $place->setName('place1');
         $place->setAdresse('Adresse1');
         $manager->persist($place);

         $place = new Place();
         $place->setName('place2');
         $place->setAdresse('Adresse2');
         $manager->persist($place);
         
         $place = new Place();
         $place->setName('place3');
         $place->setAdresse('Adresse3');
         $manager->persist($place);
         

        $manager->flush();
    }
}
