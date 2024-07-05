<?php

namespace App\Controller;

use App\Entity\FormEvent;
use App\Form\FormEventType;
use App\Repository\FormEventRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/event')]
class FormEventController extends AbstractController
{
    #[Route('/', name: 'app_form_event_index', methods: ['GET'])]
    public function index(FormEventRepository $formEventRepository): Response
    {
        return $this->render('form_event/index.html.twig', [
            'form_events' => $formEventRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_form_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $formEvent = new FormEvent();
        $form = $this->createForm(FormEventType::class, $formEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($formEvent);
            $entityManager->flush();

            return $this->redirectToRoute('app_timer', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('form_event/new.html.twig', [
            'form_event' => $formEvent,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_form_event_show', methods: ['GET'])]
    public function show(FormEvent $formEvent): Response
    {
        return $this->render('form_event/show.html.twig', [
            'form_event' => $formEvent,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_form_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, FormEvent $formEvent, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FormEventType::class, $formEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_form_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('form_event/edit.html.twig', [
            'form_event' => $formEvent,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_form_event_delete', methods: ['POST'])]
    public function delete(Request $request, FormEvent $formEvent, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$formEvent->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($formEvent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_form_event_index', [], Response::HTTP_SEE_OTHER);
    }
}
