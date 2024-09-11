<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    const SNEAKERS_CATEGORIES = [
        'OG',
        'Tennis',
        'Rap',
        'Movie',
        'Skate',
        'Running',
        'Basketball',
        'Football',
        'Casual',
        'Training',
        'Other'
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::SNEAKERS_CATEGORIES as $name) {
            $category = new Category();
            $category->setName($name);
            $this->addReference(strtolower($name), $category);
            $manager->persist($category);
        }

        $manager->flush();
    }
}
