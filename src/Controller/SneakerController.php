<?php

namespace App\Controller;

use App\Repository\SneakerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SneakerController extends AbstractController
{
    private SneakerRepository $sneakerRepository;

    public function __construct(SneakerRepository $sneakerRepository)
    {
        $this->sneakerRepository = $sneakerRepository;
    }

    #[Route('/sneaker/view/{id}', name: 'sneaker_detail')]
    public function detail(int $id): Response
    {
        $sneaker = $this->sneakerRepository->find($id);

        if (!$sneaker) {
            throw $this->createNotFoundException('Sneaker not found');
        }

        return $this->render('List/sneaker_detail.html.twig', [
            'sneaker' => $sneaker,
        ]);
    }
}
