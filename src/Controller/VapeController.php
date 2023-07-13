<?php

namespace App\Controller;

use App\Repository\VapeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\SearchVapeType;

class VapeController extends AbstractController
{
    #[Route('/vape', name: 'app_vape')]
    public function index(Request $request, VapeRepository $vapeRepository): Response
    {

        
        $form = $this->createForm(SearchVapeType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $search = $form->getData()['search'] ?? '';
            $categories = $form->getData()['categories'] ?? '';

            $vape = $vapeRepository->findLikeName($search, $categories);
        } else {
            $vape = $vapeRepository->findAll();
        }

        return $this->render('vape/index.html.twig', [
            'controller_name' => 'VapeController',
            'vaper' => $vape,
            'form' => $form,
        ]);
    }

    #[Route('/details-vape/{id}/', name: 'vape_show')]
    public function show(
        int $id,
        VapeRepository $vapeRepository,
    ): Response {
        $vape = $vapeRepository->find($id);
        return $this->render('description/index.html.twig', [
        'vape' => $vape,
        ]);
    }
}
