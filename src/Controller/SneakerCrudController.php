<?php

namespace App\Controller;

use App\Entity\Sneaker;
use App\Form\SneakerType;
use App\Repository\SneakerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/sneaker/crud')]
final class SneakerCrudController extends AbstractController
{
    #[Route(name: 'app_sneaker_crud_index', methods: ['GET'])]
    public function index(SneakerRepository $sneakerRepository): Response
    {
        return $this->render('sneaker_crud/index.html.twig', [
            'sneakers' => $sneakerRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_sneaker_crud_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $sneaker = new Sneaker();
        $form = $this->createForm(SneakerType::class, $sneaker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($sneaker);
            $entityManager->flush();

            return $this->redirectToRoute('app_sneaker_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sneaker_crud/new.html.twig', [
            'sneaker' => $sneaker,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sneaker_crud_show', methods: ['GET'])]
    public function show(Sneaker $sneaker): Response
    {
        return $this->render('sneaker_crud/show.html.twig', [
            'sneaker' => $sneaker,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sneaker_crud_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sneaker $sneaker, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SneakerType::class, $sneaker);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_sneaker_crud_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sneaker_crud/edit.html.twig', [
            'sneaker' => $sneaker,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'app_sneaker_crud_delete', methods: ['GET', 'POST'])]
    public function delete(Request $request, Sneaker $sneaker, EntityManagerInterface $entityManager): Response
    {
//        if ($this->isCsrfTokenValid('delete'.$sneaker->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($sneaker);
            $entityManager->flush();
            $this->addFlash('success', 'Sneaker deleted successfully');
//        }

        return $this->redirectToRoute('app_sneaker_crud_index', [], Response::HTTP_SEE_OTHER);
    }
}
