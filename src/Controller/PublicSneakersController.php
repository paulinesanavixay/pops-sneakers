<?php

namespace App\Controller;

use App\Entity\SneakerSell;
use App\Repository\SneakerSellRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PublicSneakersController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private SneakerSellRepository $sneakerSellRepository
    )
    {}

    #[Route('/public_sneakers', name: 'public_sneakers_list')]
    public function list(Request $request)
    {
        // 1st step - Fetch the query parameter
        $value = $request->request->get('query');

        // 2nd step - Fetch sneakers filtered by the query value
        if ($value === null) {
            $submittedSneakers = $this->sneakerSellRepository->findAll();
        } else {
            $submittedSneakers = $this->sneakerSellRepository->findSneakersBySearchForm($value);
        }

        // 3rd step - Pass the filtered sneakers to the template
        return $this->render('List/publicList.html.twig', [
            'submittedSneakers' => $submittedSneakers,
        ]);
    }
}
