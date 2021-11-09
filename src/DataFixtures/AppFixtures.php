<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Place;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setFirstName('user1');
        $user1->setLastName('lastname1');
        $user1->setEmail('name1@gmail.com');
        $manager->persist($user1);

        $user2 = new User();
        $user2->setFirstName('user2');
        $user2->setLastName('lastname2');
        $user2->setEmail('name2@gmail.com');
        $manager->persist($user2);
       
        
        $place = new Place();
         $place->setName('place1');
         $place->setAdresse('Adresse1');
         $place->setUser($user1);
         $manager->persist($place);

         $place = new Place();
         $place->setName('place2');
         $place->setAdresse('Adresse2');
         $place->setUser($user2);
         $manager->persist($place);
         
         $place = new Place();
         $place->setName('place3');
         $place->setAdresse('Adresse3');
         $place->setUser($user1);
         $manager->persist($place);

        $manager->flush();
    }
}
