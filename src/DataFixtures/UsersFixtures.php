<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UsersFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setFirstName('user1');
        $user->setLastName('lastname1');
        $user->setEmail('name1@gmail.com');
        $manager->persist($user);

        $user = new User();
        $user->setFirstName('user2');
        $user->setLastName('lastname2');
        $user->setEmail('name2@gmail.com');
        $manager->persist($user);
        
        $user = new User();
        $user->setFirstName('user3');
        $user->setLastName('lastname3');
        $user->setEmail('name3@gmail.com');
        $manager->persist($user);
        

       $manager->flush();
    }
}
