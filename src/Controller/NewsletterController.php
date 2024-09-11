<?php

namespace App\Controller;

use App\Entity\NewsletterEmail;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewsletterController extends AbstractController
{
    public function __construct(
        private ManagerRegistry $managerRegistry
    )
    {}

    #[Route('/newsletter', name: 'newsletter')]
    public function subscribe(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            // 1er : Récupérer l'adressse email dans le formulaire présent dans la requête
            $email = $request->get('email');

            // 2eme : Enregistrer l'email recue dans la table/entité NewsletterEmail en BDD
            $newsletter = new NewsletterEmail();
            $newsletter->setEmail($email);
            $datetime = new \DateTime('now');
            $newsletter->setCreationDate($datetime);
            $manager = $this->managerRegistry->getManager();
            $manager->persist($newsletter);
            $manager->flush();

            // 3eme : Créer un message flash a envoyer au template pour dire que l'enregistrement en BDD s'est bien passé

            $this->addFlash('warning', 'You have successfully subscribed to our newsletter!');

            return $this->redirectToRoute('newsletter');
        }

        return $this->render('newsletter.html.twig');
    }
}
