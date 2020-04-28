<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Users;

class LoadUser extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $listNames = array('Alexandre', 'Marine', 'Anna');

        foreach ($listNames as $name) {
      $user = new Users;

      $user->setUsername($name);
      $user->setPassword($name);

      $user->setSalt('');
      $user->setRoles(array('ROLE_USER'));

      $manager->persist($user);
    }

        $manager->flush();
    }
}
