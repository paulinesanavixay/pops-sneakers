<?php

namespace App\Controller;

use App\Entity\Brand;
use App\Entity\Sneaker;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BrandListController extends AbstractController
{
    #[Route('/list', name: 'brandList')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $brands = $entityManager->getRepository(Brand::class)->findAll();

        return $this->render('list/brandList.html.twig', [
            'brands' => $brands,
        ]);
    }

    #[Route('/sneakers/{brandName}', name: 'sneaker_list')]
    public function showSneakersByBrand(string $brandName, EntityManagerInterface $entityManager): Response
    {
        // Find the brand by name
        $brand = $entityManager->getRepository(Brand::class)->findOneBy(['name' => $brandName]);

        // Find all sneakers for the selected brand
        $sneakers = $entityManager->getRepository(Sneaker::class)->findBy(['brand' => $brand]);

        // Render the sneakers for the selected brand
        return $this->render('list/sneakers.html.twig', [
            'brand' => $brand,
            'sneakers' => $sneakers,
        ]);
    }
}