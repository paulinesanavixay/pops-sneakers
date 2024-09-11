<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $usersData = [
            ['name' => 'Pauline', 'password' => 'pauline'],
            ['name' => 'Jean', 'password' => 'jean'],
            ['name' => 'Marie', 'password' => 'marie'],
        ];

        foreach ($usersData as $userData) {
            $user = new User();
            $user->setUsername($userData['name']);
            $user->setPassword($userData['password']);
            $user->setRoles(['ROLE_USER']);
            $manager->persist($user);
        }

        $manager->flush();
    }
}
