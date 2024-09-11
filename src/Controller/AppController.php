<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AppController extends AbstractController
{

    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render("home.html.twig");
    }

    #[Route('/about', name: 'aboutpage')]
    public function about(): Response
    {
        return $this->render("about.html.twig");
    }
    #[Route('/sell', name: 'sell')]
    public function sell(): Response
    {
        return $this->render("sell.html.twig");
    }
    #[Route('/newsletter', name: 'newsletter')]
    public function newsletter(): Response
    {
        return $this->render("newsletter.html.twig");
    }

}