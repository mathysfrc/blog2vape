<?php

namespace App\Controller;

use App\Entity\Vape;
use App\Form\VapeType;
use App\Repository\VapeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/vape/admin')]
class VapeAdminController extends AbstractController
{
    #[Route('/', name: 'app_vape_admin_index', methods: ['GET'])]
    public function index(VapeRepository $vapeRepository): Response
    {
        return $this->render('vape_admin/index.html.twig', [
            'vapes' => $vapeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_vape_admin_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $vape = new Vape();
        $form = $this->createForm(VapeType::class, $vape);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($vape);
            $entityManager->flush();

            return $this->redirectToRoute('app_vape_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('vape_admin/new.html.twig', [
            'vape' => $vape,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_vape_admin_show', methods: ['GET'])]
    public function show(Vape $vape): Response
    {
        return $this->render('vape_admin/show.html.twig', [
            'vape' => $vape,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_vape_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vape $vape, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VapeType::class, $vape);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_vape_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('vape_admin/edit.html.twig', [
            'vape' => $vape,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_vape_admin_delete', methods: ['POST'])]
    public function delete(Request $request, Vape $vape, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$vape->getId(), $request->request->get('_token'))) {
            $entityManager->remove($vape);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_vape_admin_index', [], Response::HTTP_SEE_OTHER);
    }
}
