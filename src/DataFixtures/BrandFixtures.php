<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BrandFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $brands = [
            ['name' => 'Nike', 'logo' => 'nikeLogo.png'],
            ['name' => 'Adidas', 'logo' => 'adidasLogo.png'],
            ['name' => 'Asics', 'logo' => 'asicsLogo.png'],
            ['name' => 'New Balance', 'logo' => 'newBalanceLogo.png'],
            ['name' => 'Vans', 'logo' => 'vansLogo.png'],
            ['name' => 'Reebok', 'logo' => 'reebokLogo.png'],
            ['name' => 'Converse', 'logo' => 'converseLogo.png'],
            ['name' => 'Saucony', 'logo' => 'sauconyLogo.png'],
            ['name' => 'Mizuno', 'logo' => 'mizunoLogo.png'],
            ['name' => 'le Coq Sportif', 'logo' => 'leCoqLogo.png'],
            ['name' => 'Lacoste', 'logo' => 'lacosteLogo.png'],
            ['name' => 'Puma', 'logo' => 'pumaLogo.png'],
            ['name' => 'The North Face', 'logo' => 'theNorthFaceLogo.png']
        ];

        foreach ($brands as $brandData) {
            $brand = new Brand();
            $brand->setName($brandData['name']);
            $brand->setLogo($brandData['logo']);

            $this->addReference(strtolower($brandData['name']), $brand);
            $manager->persist($brand);
        }

        $manager->flush();
    }
}