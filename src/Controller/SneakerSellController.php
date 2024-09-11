<?php

namespace App\Controller;

use App\Entity\SneakerSell;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class SneakerSellController extends AbstractController
{
    #[Route('/sell_sneaker', name: 'sell_sneaker', methods: ['POST'])]
    public function sellSneaker(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Création d'une nouvelle entité SneakerSell
        $sneakerSell = new SneakerSell();
        $sneakerSell->setName($request->request->get('model_name'))
            ->setBrand($request->request->get('brand'))
            ->setDescription($request->request->get('description'))
            ->setPrice($request->request->get('price'))
            ->setColor($request->request->get('color'))
            ->setCondition($request->request->get('condition'))
            ->setSize($request->request->get('size'))
            ->setEmailCustomer($request->request->get('emailCustomer'))
            ->setPseudo($request->request->get('pseudo'))
            ->setCategory($request->request->get('category'));


        // Gestion de l'image de la sneaker
        $image = $request->files->get('image');
        if ($image) {
            $imageName = uniqid() . '.' . $image->guessExtension();
            $image->move($this->getParameter('sneaker_images_directory'), $imageName);
            $sneakerSell->setImage($imageName);
        }

        // Gestion de la preuve d'achat
        $proofOfPurchase = $request->files->get('proof_of_purchase');
        if ($proofOfPurchase) {
            $proofName = uniqid() . '.' . $proofOfPurchase->guessExtension();
            $proofOfPurchase->move($this->getParameter('proof_upload_directory'), $proofName);
            $sneakerSell->setProofOfPurchase($proofName);
        }

        $entityManager->persist($sneakerSell);
        $entityManager->flush();

        return $this->redirectToRoute('sell');
    }
}
