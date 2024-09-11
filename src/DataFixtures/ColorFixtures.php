<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Color;

class ColorFixtures extends Fixture
{
    const COLORS = [
        'red',
        'black',
        'grey',
        'white',
        'yellow',
        'blue',
        'brown',
        'purple',
        'pink',
        'green',
        'orange'
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::COLORS as $name) {
            $color = new Color();
            $color->setName($name);
            $this->addReference($name, $color);
            $manager->persist($color);
        }

        $manager->flush();
    }
}
